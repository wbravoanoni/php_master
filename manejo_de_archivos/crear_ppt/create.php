<?php
#composer
#http://librosweb.es/tutorial/como-instalar-composer-globalmente/

#library
#https://github.com/PHPOffice/PHPPresentation

require_once './vendor/autoload.php';

use PhpOffice\PhpPresentation\PhpPresentation;
use PhpOffice\PhpPresentation\IOFactory;
use PhpOffice\PhpPresentation\Style\Alignment;
use PhpOffice\PhpPresentation\Slide;
use PhpOffice\PhpPresentation\Shape\RichText;

$objPHPPresentation = new PhpPresentation();
$currentSlide = $objPHPPresentation->getActiveSlide();

$shape = $currentSlide
            ->createRichTextShape()
            ->setWidth( 600 )
            ->setOffsetX( 170 )
            ->setOffsetY( 50 );

$textRun = $shape->createTextRun('PHP File Handling Course');
$shape = $currentSlide->createDrawingShape();
$shape->setPath( './gato.jpg' )
        ->setHeight(300)
        ->setOffsetX( 100 )
        ->setOffsetY( 100 )
        ;


$textRun
        ->getFont()
        ->setBold(true)
        ->setSize(18);


$writer = IOFactory::createWriter( $objPHPPresentation, 'PowerPoint2007');

header('Content-Disposition: attachment; filename=export.ppt');

$writer->save('php://output');exit;