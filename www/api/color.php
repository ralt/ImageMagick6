



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" >
  <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1,shrink-to-fit=no" >
  <title>MagickCore, C API: Count the Colors in an Image @ ImageMagick</title>
  <meta name="application-name" content="ImageMagick">
  <meta name="description" content="Use ImageMagick® to create, edit, compose, convert bitmap images. With ImageMagick you can resize your image, crop it, change its shades and colors, add captions, among other operations.">
  <meta name="application-url" content="https://imagemagick.org">
  <meta name="generator" content="PHP">
  <meta name="keywords" content="magickcore, c, api:, count, the, colors, in, an, image, ImageMagick, PerlMagick, image processing, image, photo, software, Magick++, OpenMP, convert">
  <meta name="rating" content="GENERAL">
  <meta name="robots" content="INDEX, FOLLOW">
  <meta name="generator" content="ImageMagick Studio LLC">
  <meta name="author" content="ImageMagick Studio LLC">
  <meta name="revisit-after" content="2 DAYS">
  <meta name="resource-type" content="document">
  <meta name="copyright" content="Copyright (c) 1999-2017 ImageMagick Studio LLC">
  <meta name="distribution" content="Global">
  <meta name="magick-serial" content="P131-S030410-R485315270133-P82224-A6668-G1245-1">
  <meta name="google-site-verification" content="_bMOCDpkx9ZAzBwb2kF3PRHbfUUdFj2uO8Jd1AXArz4">
  <link href="https://imagemagick.org/api/color.php" rel="canonical">
  <link href="../image/wand.png" rel="icon">
  <link href="../image/wand.ico" rel="shortcut icon">
  <link href="../assets/magick-css.php" rel="stylesheet">
</head>
<body>
  <header>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="../index.html"><img class="d-block" id="wand" alt="ImageMagick" width="32" height="32" src="../image/wand.ico"/></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse collapse" id="navbarsExampleDefault" style="">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="../script/download.php">Download</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="../script/command-line-tools.php">Tools</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="../script/command-line-processing.php">Command-line</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="../script/resources.php">Resources</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="../script/develop.php">Develop</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" target="_blank" href="https://imagemagick.org/discourse-server/">Community</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" action="../script/search.php">
      <input class="form-control mr-sm-2" type="text" name="q" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="sa">Search</button>
    </form>
    </div>
  </nav>
  <div class="container">
   <script async="async" src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>    <ins class="adsbygoogle"
         style="display:block"
         data-ad-client="ca-pub-3129977114552745"
         data-ad-slot="6345125851"
         data-ad-format="auto"></ins>
    <script>
      (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
  </div>
  </header>
  <main class="container">
    <div class="magick-template">
<div class="magick-header">
<p class="text-center"><a href="color.php#AcquireColorCache">AcquireColorCache</a> &bull; <a href="color.php#GetColorInfoList">GetColorInfoList</a> &bull; <a href="color.php#GetColorList">GetColorList</a> &bull; <a href="color.php#ListColorInfo">ListColorInfo</a> &bull; <a href="color.php#QueryColorCompliance">QueryColorCompliance</a> &bull; <a href="color.php#QueryColorDatabase">QueryColorDatabase</a> &bull; <a href="color.php#QueryColorname">QueryColorname</a> &bull; <a href="color.php#QueryMagickColorCompliance">QueryMagickColorCompliance</a> &bull; <a href="color.php#QueryMagickColor">QueryMagickColor</a> &bull; <a href="color.php#QueryMagickColorname">QueryMagickColorname</a></p>

<h2><a href="http://www.imagemagick.org/api/MagickCore/color_8c.html" id="AcquireColorCache">AcquireColorCache</a></h2>

<p>AcquireColorCache() caches one or more color configurations which provides a mapping between color attributes and a color name.</p>

<p>The format of the AcquireColorCache method is:</p>

<pre class="text">
LinkedListInfo *AcquireColorCache(const char *filename,
  ExceptionInfo *exception)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>filename</dt>
<dd>the font file name. </dd>

<dd> </dd>
<dt>exception</dt>
<dd>return any errors or warnings in this structure. </dd>

<dd>  </dd>
</dl>
<h2><a href="http://www.imagemagick.org/api/MagickCore/color_8c.html" id="GetColorInfoList">GetColorInfoList</a></h2>

<p>GetColorInfoList() returns any colors that match the specified pattern.</p>

<p>The format of the GetColorInfoList function is:</p>

<pre class="text">
const ColorInfo **GetColorInfoList(const char *pattern,
  size_t *number_colors,ExceptionInfo *exception)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>pattern</dt>
<dd>Specifies a pointer to a text string containing a pattern. </dd>

<dd> </dd>
<dt>number_colors</dt>
<dd> This integer returns the number of colors in the list. </dd>

<dd> </dd>
<dt>exception</dt>
<dd>return any errors or warnings in this structure. </dd>

<dd>  </dd>
</dl>
<h2><a href="http://www.imagemagick.org/api/MagickCore/color_8c.html" id="GetColorList">GetColorList</a></h2>

<p>GetColorList() returns any colors that match the specified pattern.</p>

<p>The format of the GetColorList function is:</p>

<pre class="text">
char **GetColorList(const char *pattern,size_t *number_colors,
  ExceptionInfo *exception)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>pattern</dt>
<dd>Specifies a pointer to a text string containing a pattern. </dd>

<dd> </dd>
<dt>number_colors</dt>
<dd> This integer returns the number of colors in the list. </dd>

<dd> </dd>
<dt>exception</dt>
<dd>return any errors or warnings in this structure. </dd>

<dd>  </dd>
</dl>
<h2><a href="http://www.imagemagick.org/api/MagickCore/color_8c.html" id="ListColorInfo">ListColorInfo</a></h2>

<p>ListColorInfo() lists color names to the specified file.  Color names are a convenience.  Rather than defining a color by its red, green, and blue intensities just use a color name such as white, blue, or yellow.</p>

<p>The format of the ListColorInfo method is:</p>

<pre class="text">
MagickBooleanType ListColorInfo(FILE *file,ExceptionInfo *exception)
</pre>

<p>A description of each parameter follows.</p>

<dt>file</dt>
<p>List color names to this file handle.</p>

<dt>exception</dt>
<p>return any errors or warnings in this structure.</p>

<h2><a href="http://www.imagemagick.org/api/MagickCore/color_8c.html" id="QueryColorCompliance">QueryColorCompliance</a></h2>

<p>QueryColorCompliance() returns the red, green, blue, and opacity intensities for a given color name.</p>

<p>The format of the QueryColorCompliance method is:</p>

<pre class="text">
MagickBooleanType QueryColorCompliance(const char *name,
  const ComplianceType compliance,PixelPacket *color,
  ExceptionInfo *exception)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>name</dt>
<dd>the color name (e.g. white, blue, yellow). </dd>

<dd> </dd>
<dt>compliance</dt>
<dd>Adhere to this color standard: SVG, X11, or XPM. </dd>

<dd> </dd>
<dt>color</dt>
<dd>the red, green, blue, and opacity intensities values of the named color in this structure. </dd>

<dd> </dd>
<dt>exception</dt>
<dd>return any errors or warnings in this structure. </dd>

<dd>  </dd>
</dl>
<h2><a href="http://www.imagemagick.org/api/MagickCore/color_8c.html" id="QueryColorDatabase">QueryColorDatabase</a></h2>

<p>QueryColorDatabase() returns the red, green, blue, and opacity intensities for a given color name.</p>

<p>The format of the QueryColorDatabase method is:</p>

<pre class="text">
MagickBooleanType QueryColorDatabase(const char *name,PixelPacket *color,
  ExceptionInfo *exception)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>name</dt>
<dd>the color name (e.g. white, blue, yellow). </dd>

<dd> </dd>
<dt>color</dt>
<dd>the red, green, blue, and opacity intensities values of the named color in this structure. </dd>

<dd> </dd>
<dt>exception</dt>
<dd>return any errors or warnings in this structure. </dd>

<dd>  </dd>
</dl>
<h2><a href="http://www.imagemagick.org/api/MagickCore/color_8c.html" id="QueryColorname">QueryColorname</a></h2>

<p>QueryColorname() returns a named color for the given color intensity.  If an exact match is not found, a rgb() color is returned instead.</p>

<p>The format of the QueryColorname method is:</p>

<pre class="text">
MagickBooleanType QueryColorname(const Image *image,
  const PixelPacket *color,const ComplianceType compliance,char *name,
  ExceptionInfo *exception)
</pre>

<p>A description of each parameter follows.</p>

<dt>image</dt>
<p>the image.</p>

<dt>color</dt>
<p>the color intensities.</p>

<dt>compliance</dt>
<p>Adhere to this color standard: SVG, X11, or XPM.</p>

<dt>name</dt>
<p>Return the color name or hex value.</p>

<dt>exception</dt>
<p>return any errors or warnings in this structure.</p>

<h2><a href="http://www.imagemagick.org/api/MagickCore/color_8c.html" id="QueryMagickColorCompliance">QueryMagickColorCompliance</a></h2>

<p>QueryMagickColorCompliance() returns the red, green, blue, and opacity intensities for a given color name and standards compliance.</p>

<p>The format of the QueryMagickColor method is:</p>

<pre class="text">
MagickBooleanType QueryMagickColorCompiliance(const char *name,
  const ComplianceType compliance,MagickPixelPacket *color,
  ExceptionInfo *exception)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>name</dt>
<dd>the color name (e.g. white, blue, yellow). </dd>

<dd> </dd>
<dt>compliance</dt>
<dd>Adhere to this color standard: SVG, X11, or XPM. </dd>

<dd> </dd>
<dt>color</dt>
<dd>the red, green, blue, and opacity intensities values of the named color in this structure. </dd>

<dd> </dd>
<dt>exception</dt>
<dd>return any errors or warnings in this structure. </dd>

<dd>  </dd>
</dl>
<h2><a href="http://www.imagemagick.org/api/MagickCore/color_8c.html" id="QueryMagickColor">QueryMagickColor</a></h2>

<p>QueryMagickColor() returns the red, green, blue, and opacity intensities for a given color name.</p>

<p>The format of the QueryMagickColor method is:</p>

<pre class="text">
MagickBooleanType QueryMagickColor(const char *name,
  MagickPixelPacket *color,ExceptionInfo *exception)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>name</dt>
<dd>the color name (e.g. white, blue, yellow). </dd>

<dd> </dd>
<dt>color</dt>
<dd>the red, green, blue, and opacity intensities values of the named color in this structure. </dd>

<dd> </dd>
<dt>exception</dt>
<dd>return any errors or warnings in this structure. </dd>

<dd>  </dd>
</dl>
<h2><a href="http://www.imagemagick.org/api/MagickCore/color_8c.html" id="QueryMagickColorname">QueryMagickColorname</a></h2>

<p>QueryMagickColorname() returns a named color for the given color intensity. If an exact match is not found, a hex value is returned instead.  For example an intensity of rgb:(0,0,0) returns black whereas rgb:(223,223,223) returns #dfdfdf.</p>

<p>The format of the QueryMagickColorname method is:</p>

<pre class="text">
MagickBooleanType QueryMagickColorname(const Image *image,
  const PixelPacket *color,const ComplianceType compliance,char *name,
  ExceptionInfo *exception)
</pre>

<p>A description of each parameter follows.</p>

<dt>image</dt>
<p>the image.</p>

<dt>color</dt>
<p>the color intensities.</p>

<dt>Compliance</dt>
<p>Adhere to this color standard: SVG, X11, or XPM.</p>

<dt>name</dt>
<p>Return the color name or hex value.</p>

<dt>exception</dt>
<p>return any errors or warnings in this structure.</p>

</div>
    </div>
  </main><!-- /.container -->
  <footer class="magick-footer">
    <p><a href="../script/security-policy.php">Security</a> •
    <a href="../script/architecture.php">Architecture</a> •
    <a href="../script/links.php">Related</a> •
     <a href="../script/sitemap.php">Sitemap</a>
    &nbsp; &nbsp;
    <a href="color.php#"><img class="d-inline" id="wand" alt="And Now a Touch of Magick" width="16" height="16" src="../image/wand.ico"/></a>
    &nbsp; &nbsp;
    <a href="http://pgp.mit.edu/pks/lookup?op=get&amp;search=0x89AB63D48277377A">Public Key</a> •
    <a href="../script/support.php">Donate</a> •
    <a href="../script/contact.php">Contact Us</a>
    <br/>
        <small>© 1999-2018 ImageMagick Studio LLC</small></p>
  </footer>

  <!-- Javascript assets -->
  <script src="../assets/magick-js.php" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="../assets/jquery.min.js"><\/script>')</script>
</body>
</html>
