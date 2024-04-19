<?php
include("config.php");
if (isset($_POST['dados'])) {
    $qr_data = $_POST['dados'];

    $sql = "INSERT INTO QRCodes (dados) VALUES ('$dados')";
    if ($conn->query($sql) === TRUE) {
        echo "QR code lido com sucesso!";
    } else {
        echo "Erro ao ler o QR code" . $conn->error;
    }
} else {
    echo "Dados do QR code não fornecidos.";
}
$conn->close();
?>