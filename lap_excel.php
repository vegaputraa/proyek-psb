<?php
    include 'page/koneksi.php';

    require 'vendor/autoload.php';
    use PhpOffice\PhpSpreadsheet\Spreadsheet;
    use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet -> getActiveSheet();

    $sheet -> setCellValue('A1','No');
    $sheet -> setCellValue('B1','Nama');
    $sheet -> setCellValue('C1','Alamat');
    $sheet -> setCellValue('D1','Jenis Kelamin');
    $sheet -> setCellValue('E1','Agama');
    $sheet -> setCellValue('F1','Asal Sekolah');

    $query = mysqli_query($con, "SELECT * from siswa_baru");
    $i = 2;
    $no = 1;
    while($row = mysqli_fetch_array($query)) {
        $sheet -> setCellValue('A' . $i, $no++);
        $sheet -> setCellValue('B' . $i, $row['nama']);
        $sheet -> setCellValue('C' . $i, $row['alamat']);
        $sheet -> setCellValue('D' . $i, $row['jenis_kelamin']);
        $sheet -> setCellValue('E' . $i, $row['agama']);
        $sheet -> setCellValue('F' . $i, $row['sekolah_asal']);
        $i++;
    }

    $styleArray = [
        'borders' => [
            'allBorders' => [
                'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
            ],
        ],
    ];

    $i = $i - 1;
    $sheet -> getStyle('A1:F' . $i)-> applyFromArray($styleArray);

    $file = "Data Siswa Baru.xlsx";
    $writer = new Xlsx($spreadsheet);
    $writer->save($file);

    header('Content-type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment; filename="' . $file . '"');
    $writer->save("php://output");

    ?>