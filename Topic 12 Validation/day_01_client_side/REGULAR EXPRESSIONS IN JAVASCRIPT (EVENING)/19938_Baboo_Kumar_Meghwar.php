<!DOCTYPE html>
<html>

<head>
    <title> client side validation </title>
</head>

<body>
</body>
<script>
    var pattern = RegExp(/[hidaya]/);
    var string = "world";
    var result = pattern.exec(string);
    var result2 = pattern.test(string);
    document.write("EXEC => " + result);
    document.write("<br/>");
    document.write("TEST => " + result2 + "<br/>" + "<br/>");

    var pattern = RegExp(/[yabc]/);
    var string = "testing";
    var result = pattern.exec(string);
    var result2 = pattern.test(string);
    document.write("EXEC => " + result);
    document.write("<br/>");
    document.write("TEST => " + result2 + "<br/>" + "<br/>");


    var pattern = RegExp(/[abc]/);
    var string = "xyz";
    var result = pattern.exec(string);
    var result2 = pattern.test(string);
    document.write("EXEC => " + result);
    document.write("<br/>");
    document.write("TEST => " + result2 + "<br/>" + "<br/>");

    var pattern = RegExp(/[a-z]/i);
    var string = "aacc";
    var result = pattern.exec(string);
    var result2 = pattern.test(string);
    document.write("EXEC => " + result);
    document.write("<br/>");
    document.write("TEST => " + result2 + "<br/>" + "<br/>");

    var pattern = /[0-9]/;
    var string = "testing9";
    var result = pattern.exec(string);
    var result2 = pattern.test(string);
    document.write("EXEC => " + result);
    document.write("<br/>");
    document.write("TEST => " + result2 + "<br/>" + "<br/>");

    var pattern = /\./;
    var string = "";
    var result = pattern.exec(string);
    var result2 = pattern.test(string);
    document.write("EXEC => " + result);
    document.write("<br/>");
    document.write("TEST => " + result2 + "<br/>" + "<br/>");


    var pattern = /[^css]/;
    var string = "html t";
    var result = pattern.exec(string);
    var result2 = pattern.test(string);
    document.write("EXEC => " + result);
    document.write("<br/>");
    document.write("TEST => " + result2 + "<br/>" + "<br/>");

    var pattern = /[a]*/;
    var string = "hidaya";
    var result = pattern.exec(string);
    var result2 = pattern.test(string);
    document.write("EXEC => " + result);
    document.write("<br/>");
    document.write("TEST => " + result2 + "<br/>" + "<br/>");



    var pattern = /[a]?/;
    var string = "hidaya abc";
    var result = pattern.exec(string);
    var result2 = pattern.test(string);
    document.write("EXEC => " + result);
    document.write("<br/>");
    document.write("TEST => " + result2 + "<br/>" + "<br/>");





    var pattern = /[a]{2}/;
    var string = "abc hidaya abc2";
    var result = pattern.exec(string);
    var result2 = pattern.test(string);
    document.write("EXEC => " + result);
    document.write("<br/>");
    document.write("TEST => " + result2 + "<br/>" + "<br/>");





    var pattern = /[a]{2,4}/;
    var string = "a world b";
    var result = pattern.exec(string);
    var result2 = pattern.test(string);
    document.write("EXEC => " + result);
    document.write("<br/>");
    document.write("TEST => " + result2 + "<br/>" + "<br/>");





    var pattern = /[ab]{3,}/;
    var string = "ab php bas";
    var result = pattern.exec(string);
    var result2 = pattern.test(string);
    document.write("EXEC => " + result);
    document.write("<br/>");
    document.write("TEST => " + result2 + "<br/>" + "<br/>");





    var pattern = RegExp(/[abc]$/);
    var string = "aa trust asb";
    var result = pattern.exec(string);
    var result2 = pattern.test(string);
    document.write("EXEC => " + result);
    document.write("<br/>");
    document.write("TEST => " + result2 + "<br/>" + "<br/>");





    var pattern = RegExp(/(foo|bar|baz|com)/i);
    var string = "baz com";
    var result = pattern.exec(string);
    var result2 = pattern.test(string);
    document.write("EXEC => " + result);
    document.write("<br/>");
    document.write("TEST => " + result2 + "<br/>" + "<br/>");





    var pattern = /the/;
    var string = "The rain in Pakistan stays mainly in the Tharparkar";
    var result = string.match(pattern);
    document.write("MATCH => " + result + "<br/>" + "<br/>");





    var str = "Mr Ali has a blue bag and a blue mobile";
    var pattern = /blue/gi;
    var result = str.search(pattern);
    document.write("SEARCH => " + result + "<br/>" + "<br/>");





    var string = "Mr Imran has a blue house and a blue car";
    var pattern = /orange/ig;
    var result = string.replace(pattern, "green");
    document.write("REPLACE => " + result + "<br/>" + "<br/>");





    var string = "Mr Imran has a blue house and a blue car";
    var pattern = /[pink]/ig;
    var result = string.replace(pattern, "white");
    document.write("REPLACE => " + result + "<br/>" + "<br/>");





    var str = "Mr Baboo Kumar has a yellow bag and a blue mobile";
    var pattern = /yellow/gi;
    var result = str.search(pattern);
    document.write("SEARCH => " + result + "<br/>" + "<br/>");



    var pattern = /rain/;
    var string = "The rain in Pakistan stays mainly in the NagarParkar";
    var result = string.match(pattern);
    document.write("MATCH => " + result + "<br/>" + "<br/>");




    var pattern = RegExp(/[ab]$/);
    var string = "aa english asb";
    var result = pattern.exec(string);
    var result2 = pattern.test(string);
    document.write("EXEC => " + result);
    document.write("<br/>");
    document.write("TEST => " + result2 + "<br/>" + "<br/>");




    var pattern = /[b]{3,6}/;
    var string = "a world b";
    var result = pattern.exec(string);
    var result2 = pattern.test(string);
    document.write("EXEC => " + result);
    document.write("<br/>");
    document.write("TEST => " + result2 + "<br/>" + "<br/>");




    var pattern = /[b]*/;
    var string = "aa science cc";
    var result = pattern.exec(string);
    var result2 = pattern.test(string);
    document.write("EXEC => " + result);
    document.write("<br/>");
    document.write("TEST => " + result2 + "<br/>" + "<br/>");




    var pattern = RegExp(/[A-Z]/i);
    var string = "BABOO";
    var result = pattern.exec(string);
    var result2 = pattern.test(string);
    document.write("EXEC => " + result);
    document.write("<br/>");
    document.write("TEST => " + result2 + "<br/>" + "<br/>");




    var pattern = RegExp(/[0-9]/i);
    var string = "12aacc";
    var result = pattern.exec(string);
    var result2 = pattern.test(string);
    document.write("EXEC => " + result);
    document.write("<br/>");
    document.write("TEST => " + result2 + "<br/>" + "<br/>");




    var pattern = RegExp(/[0-9]/i);
    var string = "123 ABC 321";
    var result = pattern.exec(string);
    var result2 = pattern.test(string);
    document.write("EXEC => " + result);
    document.write("<br/>");
    document.write("TEST => " + result2 + "<br/>" + "<br/>");




    var pattern = /[a]*/;
    var string = "hidaya";
    var result = pattern.exec(string);
    var result2 = pattern.test(string);
    document.write("EXEC => " + result);
    document.write("<br/>");
    document.write("TEST => " + result2 + "<br/>" + "<br/>");





    var pattern = /[a]?/;
    var string = "aba hidaya abc";
    var result = pattern.exec(string);
    var result2 = pattern.test(string);
    document.write("EXEC => " + result);
    document.write("<br/>");
    document.write("TEST => " + result2 + "<br/>" + "<br/>");




    var pattern = /[a]?/;
    var string = "speaking english abc";
    var result = pattern.exec(string);
    var result2 = pattern.test(string);
    document.write("EXEC => " + result);
    document.write("<br/>");
    document.write("TEST => " + result2 + "<br/>" + "<br/>");




    var pattern = RegExp(/[a-z]/i);
    var string = " cba ";
    var result = pattern.exec(string);
    var result2 = pattern.test(string);
    document.write("EXEC => " + result);
    document.write("<br/>");
    document.write("TEST => " + result2 + "<br/>" + "<br/>");
</script>

</html>