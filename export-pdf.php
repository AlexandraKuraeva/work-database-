<?php
include_once("db.php");
include_once('fpdf186/fpdf.php'); // Подключить библиотеку FPDF

    // Запрос для получения данных из таблицы
	 $query = "SELECT * FROM `queue`";
    $result = $conn->query($query);
	
    // Создание нового PDF-документа
    $pdf = new FPDF();
    $pdf->AddPage();

    // Установка шрифта и размера
    $pdf->SetFont('Arial', 'B', 14);
	 $pdf->Cell(40, 10, 'ID', 1);
	 $pdf->Cell(40, 10, 'Name', 1);
	 $pdf->Cell(60, 10, 'Surname', 1);
	 $pdf->Cell(50, 10, 'Data', 1);
	 $pdf->Ln();

    // Установка шрифта и размера для данных
    $pdf->SetFont('Arial', '', 12);

    // Добавление данных из таблицы в PDF-файл
    while ($row = $result->fetch_assoc()) {
        $pdf->Cell(40, 10, $row['id'], 1);
        $pdf->Cell(40, 10, $row['name'], 1);
        $pdf->Cell(60, 10, $row['surname'], 1);
        $pdf->Cell(50, 10, $row['date_added'], 1); 
        $pdf->Ln();
    }

    // Вывод PDF-файла
    $pdf->Output();
    exit;



