<?php
use OpenApi\Annotations as OA;

/**
 * *
 * @OA\Info(title="My First API", version="0.1")
 *
*/

/**
 * @OA\Post(
 *   path="/",
 *   summary="login",
 *   @OA\Response(
 *     response=200,
 *     description="You are successfully authenticated!"
 *   ),
 *   @OA\Response(
 *     response="401",
 *     description="Unauthorized Error"
 *   ),
 * @OA\Response(
 *         response=404,
 *         description="Could Not Find Resource"
 *   )
 * )
 */
    $message = "";

    if (count($_POST) > 0) {
    $isSuccess = 0;
    $conn = mysqli_connect("localhost", "root", "", "users");
    $userName = $_POST['userName'];
    $sql = "SELECT * FROM users WHERE userName= ?";
    $statement = $conn->prepare($sql);
    $statement->bind_param('s', $userName);
    $statement->execute();
    $result = $statement->get_result();
    while ($row = $result->fetch_assoc()) {
        if (! empty($row)) {
            $savedPassword = $row["password"];
            if ($_POST["password"] === $savedPassword) {
                $isSuccess = 1;
            }
        }
    }
    if ($isSuccess == 0) {
        $message = "Invalid Username or Password!";
    } else {
        header("Location:  ./success-message.php");
    }
}
?>