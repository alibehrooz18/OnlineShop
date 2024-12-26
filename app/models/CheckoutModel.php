<?php
function postInfoData($data)
{
    $db = Database::getInstance();
    $connection = $db->getConnection();

    $query = "INSERT INTO information (info_firstname, info_lastname, info_company, info_email, info_phone, info_country, info_street, info_town, info_state, info_zip, info_note) ";
    $query .= "VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($connection, $query);
    confirmQuery($stmt);
    mysqli_stmt_bind_param(
        $stmt,
        'sssssssssss',
        $data['firstname'],
        $data['lastname'],
        $data['company'],
        $data['email'],
        $data['phone'],
        $data['country'],
        $data['street'],
        $data['town'],
        $data['state'],
        $data['zip'],
        $data['notes']
    );

    $result = mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    return $result;
}
