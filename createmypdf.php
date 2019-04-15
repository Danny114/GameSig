<?php

if (!empty($_POST['submit'])) 
{
	$date=$_POST['date'];
	$g_name=$_POST['game_name'];
	$t_name=$_POST['team_name'];
	$one_sentence=$_POST['one_sentence'];
	$team_members=$_POST['team_members'];
	$platform=$_POST['platform'];
	$summary=$_POST['summary'];
	$features=$_POST['features'];
	$sample1=$_POST['sample1'];
	$sample2=$_POST['sample2'];
	$sample3=$_POST['sample3'];
	$sample4=$_POST['sample4'];
	$sample5=$_POST['sample5'];
	$third_party=$_POST['third_party'];
	$faculty=$_POST['faculty'];
	$youtube=$_POST['youtube'];
	$q1=$_POST['q1'];
	$q2=$_POST['q2'];
	$q3=$_POST['q3'];

	require __DIR__ . "/fpdf/fpdf.php";

	$pdf=new FPDF();
	$pdf->AddPage();
	$pdf->SetFont("Arial", "B", 16);
	$pdf->SetFillColor(211,211,211);

	$pdf->Cell(0,10, "International IEEE GameSIG (Classic Showcase) 2018", 0,1,L);
	$pdf->Cell(0,10, "Overview", 0,1,L);
	$pdf->SetFont("", "B", 12);
	$pdf->Cell(40,10, "Date: ", 1,0, L, true);
	$pdf->SetFont("");
	$pdf->Cell(0,10, "{$date}", 1,1);
	$pdf->SetFont("", "B", "");
	$pdf->Cell(40,10, "Game Name: ", 1,0, L, true);
	$pdf->SetFont("");
	$pdf->Cell(0,10, "{$g_name}", 1,1);
	$pdf->SetFont("", "B", "");
	$pdf->Cell(40,10, "Team Name: ", 1,0, L,true);
	$pdf->SetFont("");
	$pdf->Cell(0,10, "{$t_name}", 1,1);
	$pdf->SetFont("", "B", "");
	$pdf->Cell(0,10, "One-sentence description", 1,1, L, true);
	$pdf->SetFont("");
	$pdf->MultiCell(0,7, "{$one_sentence}", 1,1);
	$pdf->SetFont("", "B", "");
	$pdf->Cell(0,10, "List of Team Members, Their Year of Graduation, and Their Schools", 1,1, L, true);
	$pdf->SetFont("");
	$pdf->MultiCell(0,7, "{$team_members}", 1,1);
	$pdf->SetFont("", "B", "");
	$pdf->MultiCell(0,7, "Faculty Member Name & Contact Information, if any", 1,1, L, true);
	$pdf->MultiCell(0,7, "{$faculty}", 1,1);
	$pdf->SetFont("");
	$pdf->SetFont("", "B", "");
	$pdf->Cell(0,10, "Game Engine", 1,1, L, true);
	$pdf->SetFont("");
	$pdf->MultiCell(0,7, "{$platform}", 1,1);
	$pdf->SetFont("", "B", "");
	$pdf->Cell(0,10, "Key Features", 1,1, L, true);
	$pdf->SetFont("");
	$pdf->MultiCell(0,7, "{$features}", 1,1);
	$pdf->SetFont("", "B", "");
	$pdf->Cell(0,10, "One-paragraph Summary of Gameplay and Objectives", 1,1, L, true);
	$pdf->SetFont("");
	$pdf->MultiCell(0,7, "{$summary}", 1,1);
	$pdf->SetFont("", "B", "");
	$pdf->Cell(0,10, "YouTube Link: ", 1,1, L, true);
	$pdf->SetFont("");
	$pdf->MultiCell(0,7, "{$youtube}", 1,1);
	$pdf->SetFont("", "B", "");
	$pdf->Cell(0,10, "Third-Party and Ready-Made Assets Credits", 1,1, L, true);
	$pdf->SetFont("");
	$pdf->MultiCell(0,7, "{$third_party}", 1,1);
	$pdf->SetFont("", "B", "");
	$pdf->Cell(0,10, "Thumbnails of Game Art", 1,1, L, true);
	$pdf->SetFont("");
	//$pdf->MultiCell(0,7, $pdf->Image($sample1, 33.78), 1,1);
	//$pdf->Cell(0,10, "{$sample1}", 1,1, L, true);
	$pdf->SetFont("", "B", "");
	$pdf->MultiCell(0,7, "What were the top technical challenges that you encountered in the project?", 1,1, L, true);
	$pdf->SetFont("");
	$pdf->MultiCell(0,7, "{$q1}", 1,1);
	$pdf->SetFont("", "B", "");
	$pdf->MultiCell(0,7, "How did the design evolve during development? What changed, and what didn’t?", 1,1, L, true);
	$pdf->SetFont("");
	$pdf->MultiCell(0,7, "{$q2}", 1,1);
	$pdf->SetFont("", "B", "");
	$pdf->MultiCell(0,7, "Is there anything else about the game that you need to mention?", 1,1, L, true);
	$pdf->SetFont("");
	$pdf->MultiCell(0,7, "{$q3}", 1,1);

	$file = 'myRegistration.pdf';

	$pdf->output("", $file);

}

?>