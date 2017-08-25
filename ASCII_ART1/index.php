
<!DOCTYPE html>
<html>
<head>

    <!-- your webpage info goes here -->

    <title>ASCII ART</title>

    <meta name="author" content="your name" />
    <meta name="description" content="" />

    <!-- you should always add your stylesheet (css) in the head tag so that it starts loading before the page html is being displayed -->
    <link rel="stylesheet" href="styles.css" type="text/css" />

</head>
<body>

<!-- webpage content goes here in the body -->

<div id="page">
    <div id="logo">
        <h1><a href="" id="logoLink">ASCII Art</a></h1>
    </div>
    <div id="nav">
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="">Contribute</a></li>

        </ul>
    </div>
    <div id="content">
        <h2>What is it?</h2>
        <p>
            ASCII art is a graphic design technique that uses computers for presentation and consists of pictures pieced together from the 95 printable
            (from a total of 128) characters defined by the ASCII Standard from 1963 and ASCII compliant character sets with proprietary extended characters
            (beyond the 128 characters of standard 7-bit ASCII). The term is also loosely used to refer to text based visual art in general.
            ASCII art can be created with any text editor, and is often used with free-form languages.
            Most examples of ASCII art require a fixed-width font (non-proportional fonts, as on a traditional typewriter) such as Courier for presentation.
            <br/><br/>
            Among the oldest known examples of ASCII art are the creations by computer-art pioneer Kenneth Knowlton from around 1966, who was working for Bell Labs at the time.
            "Studies in Perception I" by Ken Knowlton and Leon Harmon from 1966 shows some examples of their early ASCII art.<br/><br/>

            One of the main reasons ASCII art was born was because early printers often lacked graphics ability and thus characters were used in place of graphic marks.
            Also, to mark divisions between different print jobs from different users, bulk printers often used ASCII art to print large banners, making the division
            easier to spot so that the results could be more easily separated by a computer operator or clerk. ASCII art was also used in early e-mail when images could not be embedded.
            ASCII art can also be used for typesetting initials.
        </p>

        <div class="ascii">
            <?php echo RetrieveASCIIArts(); ?>
        </div>


    </div>

    <div id="footer">
        <p>
            I don't like footers. But here is one :)
        </p>
    </div>
</div>
</body>
</html>