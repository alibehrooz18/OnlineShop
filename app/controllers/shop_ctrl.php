<?php include "../models/shop_model.php"; ?>
<?php include "../controllers/courses_ctrl.php"; ?>
<?php

// Get shop data for show total item
$items_per_page = 9;
$item_query = getShopItem();
$row = mysqli_fetch_assoc($item_query);
$total_items = $row['total_items'];
$current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$current_page = max(1, $current_page);

// Calculate start and end range
$start_item = ($current_page - 1) * $items_per_page + 1;
$end_item = min($start_item + $items_per_page - 1, $total_items);


// Pagination logic
$page_query = getShopItem();
$page_row = mysqli_fetch_assoc($page_query);
$total_items = $page_row['total_items'];
$total_pages = ceil($total_items / $items_per_page);
$current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$current_page = max(1, min($current_page, $total_pages));
$offset = ($current_page - 1) * $items_per_page;


// Filter shop
$filters = [
    'search' => isset($_GET['search']) ? $_GET['search'] : '',
    'category' => isset($_GET['category']) ? $_GET['category'] : '',
];
$offset = isset($_GET['offset']) ? intval($_GET['offset']) : 0;

$item_query = getFilteredShop($filters, $items_per_page, $offset);


// Get item by id and calc discount
if (isset($_GET['item_id'])) {
    $item_id = $_GET['item_id'];

    $row = getItemById($item_id);

    if ($row) {
        $discounted_price = calculateDiscountedPrice($row['item_price'], $row['item_discount']);

        echo json_encode([
            'item_title' => $row['item_title'],
            'item_price' => $row['item_price'],
            'item_discount' => $row['item_discount'],
            'discounted_price' => $discounted_price,
            'item_image' => $row['item_image'],
        ]);
    } else {
        echo json_encode(['error' => 'Item not found.']);
    }
} else {
    echo json_encode(['error' => 'Invalid request.']);
}
