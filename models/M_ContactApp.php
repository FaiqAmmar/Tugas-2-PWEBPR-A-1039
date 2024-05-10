<?php
include_once __DIR__ . '/../config/db_connect.php'; 

class Contact
{
    static function getAllContacts($Id)
    {
        global $conn;
        $stmt = $conn->prepare("SELECT * FROM contact WHERE no_id = ?");
        $stmt->bind_param("i", $Id);
        $stmt->execute();
        $result = $stmt->get_result();
        $contacts = array();
        while ($row = $result->fetch_assoc()) {
            $contacts[] = $row;
        }
        $conn->close();
        return $contacts;
    }

    static function createContact($data=[])
    {
        $contactName = $data['contact_name'];
        $noId = $data['no_id'];
        $noHp = $data['no_hp'];
        global $conn;
        $stmt = $conn->prepare("INSERT INTO contact (contact_name, no_id, no_hp) VALUES (?, ?, ?)");
        $stmt->bind_param("sis", $contactName, $noId, $noHp);
        $stmt->execute();
        return $conn->insert_id;
    }

    static function getContactById($id)
    {
        global $conn;
        $stmt = $conn->prepare("SELECT * FROM contact WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }

    static function updateContact($data=[])
    {
        global $conn;
        $contactName = $data['contact_name'];
        $noId = $data['no_id'];
        $noHp = $data['no_hp'];
        $id = $data['id'];
        $stmt = $conn->prepare("UPDATE contact SET contact_name = ?, no_id = ?, no_hp = ? WHERE id = ?");
        $stmt->bind_param("sisi", $contactName, $noId, $noHp, $id);
        $stmt->execute();
        return $stmt->affected_rows;
    }

    static function deleteContact($id)
    {
        global $conn;
        $stmt = $conn->prepare("DELETE FROM contact WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->affected_rows;
    }
}
