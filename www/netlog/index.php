<!DOCTYPE html>
<html lang="en-us">
<head>
</head>
<body>
<h1>Chrome Netlog Waterfall Viewer</h1>  
<p>Upload a trace file with the netlog category enabled (preferrably gzipped).</p>
<form name="form" action="import.php" method="POST" enctype="multipart/form-data" >
Upload Trace File: <input type="file" name="file" size="40">  <button type="submit">Generate Waterfall</button>
</form>
</body>
</html>
