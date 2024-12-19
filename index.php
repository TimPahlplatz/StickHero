<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script>
        let phase = 'waiting'
        let lasttimestamp;

        window.addEventListener("mousedown", function(){
        if (phase === "waiting"){
            lasttimestamp = undefined;
            phase = "streching";
            window.requestAnimationFrame(animate);
        }});

        window.addEventListener("mouseup", function(){
            if (phase = "streching") {
                phase = "turning";
            });
    
    </script>
</body>
</html>