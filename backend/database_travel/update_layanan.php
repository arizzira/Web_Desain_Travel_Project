<?php
// === CORS ===
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");

// Preflight
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit();
}

// Koneksi DB
include 'koneksi.php';

// Ambil JSON
$data = json_decode(file_get_contents("php://input"), true);

// Validasi awal
if (!$data || !isset($data["id"])) {
    http_response_code(400);
    echo json_encode(["success" => false, "message" => "Data tidak lengkap"]);
    exit;
}

// Ambil data
$id = $data["id"];
$judul = $data["judul"] ?? '';
$tujuan = $data["tujuan"] ?? '';
$harga = $data["harga"] ?? '';
$pesawat = $data["pesawat"] ?? '';
$hotel = $data["hotel"] ?? '';
$itinerary = $data["itinerary"] ?? '';
$tanggal_berangkat = $data["tanggal_berangkat"] ?? '';
$tanggal_pulang = $data["tanggal_pulang"] ?? '';

// Query update
$sql = "UPDATE isi_layanan 
        SET judul = ?, tujuan = ?, harga = ?, pesawat = ?, hotel = ?, itinerary = ?, tanggal_berangkat = ?, tanggal_pulang = ?
        WHERE id = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssssssi", $judul, $tujuan, $harga, $pesawat, $hotel, $itinerary, $tanggal_berangkat, $tanggal_pulang, $id);

if ($stmt->execute()) {
    echo json_encode(["success" => true, "message" => "Layanan berhasil diupdate"]);
} else {
    http_response_code(500);
    echo json_encode(["success" => false, "message" => $stmt->error]);
}
?>
