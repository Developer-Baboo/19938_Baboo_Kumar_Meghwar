<!doctype html>
<html>

<head>
    <title>Assignmnet</title>
</head>

<body>
    <center>
        <H1>DYNAMIC LINKS</H1>
    </center>
    <?PHP

    $_01_DOC = ".PDF";
    $_01_LINK = "./images/doc.png";

    $_02_PDF = ".PDF";
    $_02_LINK = "./images/PDF.png";

    $_03_PPT = ".PPT";
    $_03_LINK = "./images/PPTLOGO.png";

    $_04_XLS = ".XLS";
    $_04_LINK = "./images/XLS.png";
    ////////////////////////////////////////////////////////////////////////////////////////////////
    if ($_01_DOC === $_02_PDF) {
    ?>
        <img src="<?PHP echo $_02_LINK; ?>" alt="PDF Logo" height="30" , width="30">
        <a href="<?PHP echo $_02_PDF; ?>">PDF</a><br><br>

    <?PHP
    
    } 
    else if ($_01_DOC === $_03_PPT) {
    ?>
        <img src="<?PHP echo $_03_LINK; ?>" alt="PPT Logo" height="30" , width="30">
        <a href="<?PHP echo $_03_PPT; ?>">PPT</a><br><br>
    <?PHP
    } else if ($_01_DOC === $_04_XLS) {
    ?>
        <img src="<?PHP echo $_04_LINK; ?>" alt="XLS Logo" height="30" , width="30">
        <a href="<?PHP echo $_04_XLS; ?>">XLS</a><br><br>
    <?PHP
    }
    ///////////////////////////////////////////////////////////////////////////////////////////
    if ($_02_PDF === $_01_DOC) {
    ?>
        <img src="<?PHP echo $_01_LINK; ?>" alt="word Logo" height="30" , width="30">
        <a href="<?PHP echo $_02_DOC; ?>">Word</a><br><br>
    <?PHP

    } else if ($_02_PDF === $_03_PPT) {
    ?>
        <img src="<?PHP echo $_03_LINK; ?>" alt="PPT Logo" height="30" , width="30">
        <a href="<?PHP echo $_03_PPT; ?>">PPT</a><br><br>
    <?PHP
    } else if ($_02_PDF === $_04_XLS) {
    ?>
        <img src="<?PHP echo $_04_LINK; ?>" alt="XLS Logo" height="30" , width="30">
        <a href="<?PHP echo $_04_XLS; ?>">XLS</a><br><br>
    <?PHP

    }

    ////////////////////////////////////////////////////////////////////////////////////////////
    if ($_03_PPT === $_01_DOC) {
    ?>
        <img src="<?PHP echo $_01_LINK; ?>" alt="DOC Logo" height="30" , width="30">
        <a href="<?PHP echo $_01_DOC; ?>">DOC</a><br><br>
    <?PHP

    } else if ($_03_PPT === $_02_PDF) {
    ?>
        <img src="<?PHP echo $_02_LINK; ?>" alt="PDF Logo" height="30" , width="30">
        <a href="<?PHP echo $_02_PDF; ?>">PDF</a><br><br>
    <?PHP

    } else if ($_03_PPT === $_04_XLS) {
    ?>
        <img src="<?PHP echo $_04_LINK; ?>" alt="XLS Logo" height="30" , width="30">
        <a href="<?PHP echo $_04_XLS; ?>">XLS</a><br><br>
    <?PHP
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////
    if ($_04_XLS === $_02_PDF) {
    ?>
        <img src="<?PHP echo $_02_LINK; ?>" alt="PDF Logo" height="30" , width="30">
        <a href="<?PHP echo $_02_PDF; ?>">PDF</a><br><br>
    <?PHP

    } else if ($_04_XLS === $_03_PPT) {
    ?>
        <img src="<?PHP echo $_03_LINK; ?>" alt="PPT Logo" height="30" , width="30">
        <a href="<?PHP echo $_03_PPT; ?>">PPT</a><br><br>
    <?PHP
    } else if ($_04_XLS === $_01_DOC) {
    ?>
        <img src="<?PHP echo $_01_LINK; ?>" alt="DOC Logo" height="30" , width="30">
        <a href="<?PHP echo $_01_DOC; ?>">DOC</a><br><br>
    <?PHP
    }
    ?>

    <img src="
    <?PHP echo $_01_LINK; ?>
    " alt="Doc Logo" height="30" , width="30">
    <a href="<?PHP echo $_01_DOC; ?>">WORD</a><br><br>

    <img src="
    <?PHP echo $_02_LINK; ?>
    " alt="PDF Logo" height="30" , width="30">
    <a href="
    <?PHP echo $_01_PDF; ?>
    ">PDF</a><br><br>

    <img src="
    <?PHP echo $_03_LINK; ?>
    " alt="PPT Logo" height="30" , width="30">
    <a href="<?PHP echo $_01_PPT; ?>">POWER POINT</a> <br> <br>

    <img src="
    <?PHP echo $_04_LINK; ?>
    " alt="XLS Logo" height="30" , width="30">
    <a href="
    <?PHP echo $_04_XLS; ?>
    ">EXCEL</a> <br> <br>




</body>

</html>