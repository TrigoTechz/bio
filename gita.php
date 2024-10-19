<?php
// Set the header to return JSON format
header('Content-Type: application/json');

// Check if 'query' is set in the URL parameters
if (isset($_GET['query'])) {
    $query = urlencode($_GET['query']);  // Extract and encode the query parameter
    $api_url = "https://trainapi.onrender.com/ask-gita?query=" . $query;  // External API endpoint with query parameter

    // Use file_get_contents to send the GET request to the external API
    $api_response = file_get_contents($api_url);

    // If the API returns a response, echo it back
    if ($api_response) {
        echo $api_response;  // Return the API response as JSON
    } else {
        // If the API call fails, return an error message
        echo json_encode(['error' => 'Could not retrieve data from the external API.']);
    }
} else {
    // If 'query' is not set, return an error message
    echo json_encode(['error' => 'Please provide a query parameter.']);
}
?>
