<?php

$pdf = \PDF::loadHTML('test');

        return $pdf->stream();
?>


