<?php
header('Content-Type: application/json');

// Include database configuration
include 'config/database.php';

// Get form data
$data = json_decode(file_get_contents("php://input"), true);

try {
    $database = new Database();
    $db = $database->getConnection();

    // Prepare SQL query
    $query = "INSERT INTO pickup_requests 
              (phone_number, material_type, estimated_weight, photos_count, pickup_date, pickup_time, pickup_address, latitude, longitude, status) 
              VALUES 
              (:phone_number, :material_type, :estimated_weight, :photos_count, :pickup_date, :pickup_time, :pickup_address, :latitude, :longitude, 'pending')";

    $stmt = $db->prepare($query);

    // Bind parameters
    $stmt->bindParam(":phone_number", $data['phone']);
    $stmt->bindParam(":material_type", $data['material']);
    $stmt->bindParam(":estimated_weight", $data['weight']);
    $stmt->bindParam(":photos_count", $data['photos']);
    $stmt->bindParam(":pickup_date", $data['date']);
    $stmt->bindParam(":pickup_time", $data['time']);
    $stmt->bindParam(":pickup_address", $data['address']);
    $stmt->bindParam(":latitude", $data['coordinates']['lat']);
    $stmt->bindParam(":longitude", $data['coordinates']['lng']);

    // Execute query
    if ($stmt->execute()) {
        $request_id = $db->lastInsertId();
        
        echo json_encode([
            "success" => true,
            "message" => "Pickup request submitted successfully!",
            "request_id" => $request_id
        ]);
    } else {
        echo json_encode([
            "success" => false,
            "message" => "Failed to submit pickup request."
        ]);
    }
} catch(PDOException $exception) {
    echo json_encode([
        "success" => false,
        "message" => "Database error: " . $exception->getMessage()
    ]);
}



header('Content-Type: application/json');

// CORS headers
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type");

// Include database configuration
include 'config/database.php';

// Get form data
$data = json_decode(file_get_contents("php://input"), true);

// Validate required fields
$required_fields = ['phone', 'material', 'weight', 'date', 'time', 'address'];
foreach ($required_fields as $field) {
    if (empty($data[$field])) {
        echo json_encode([
            "success" => false,
            "message" => "Missing required field: " . $field
        ]);
        exit;
    }
}

// Sanitize data
function sanitize($input) {
    return htmlspecialchars(strip_tags(trim($input)));
}

try {
    $database = new Database();
    $db = $database->getConnection();

    // Prepare SQL query
    $query = "INSERT INTO pickup_requests 
              (phone_number, material_type, estimated_weight, photos_count, pickup_date, pickup_time, pickup_address, latitude, longitude, status) 
              VALUES 
              (:phone_number, :material_type, :estimated_weight, :photos_count, :pickup_date, :pickup_time, :pickup_address, :latitude, :longitude, 'pending')";

    $stmt = $db->prepare($query);

    // Sanitize and bind parameters
    $stmt->bindValue(":phone_number", sanitize($data['phone']));
    $stmt->bindValue(":material_type", sanitize($data['material']));
    $stmt->bindValue(":estimated_weight", floatval($data['weight']));
    $stmt->bindValue(":photos_count", intval($data['photos']));
    $stmt->bindValue(":pickup_date", sanitize($data['date']));
    $stmt->bindValue(":pickup_time", sanitize($data['time']));
    $stmt->bindValue(":pickup_address", sanitize($data['address']));
    $stmt->bindValue(":latitude", $data['coordinates']['lat'] ? floatval($data['coordinates']['lat']) : null);
    $stmt->bindValue(":longitude", $data['coordinates']['lng'] ? floatval($data['coordinates']['lng']) : null);

    // Execute query
    if ($stmt->execute()) {
        $request_id = $db->lastInsertId();
        
        echo json_encode([
            "success" => true,
            "message" => "Pickup request submitted successfully!",
            "request_id" => $request_id
        ]);
    } else {
        echo json_encode([
            "success" => false,
            "message" => "Failed to submit pickup request."
        ]);
    }
} catch(PDOException $exception) {
    error_log("Database error: " . $exception->getMessage());
    echo json_encode([
        "success" => false,
        "message" => "An error occurred. Please try again."
    ]);
}
?>