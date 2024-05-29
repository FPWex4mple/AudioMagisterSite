<?php
    if (isset($_POST['button'])){
        header('Location: page2.php');
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AudioMagister</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500;700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@400&display=swap" />
    <link rel="stylesheet" href="assets/css/index.css" />
</head>
<body>
<div class="liquid" id="liquid"></div>

<div class="main-container">
    <div class="flex-row-b">
        <span class="audio-magister">AudioMagister</span
        ><span class="audio-magister-key">
          “AudioMagister” - ваш ключ к миру знаний и увлекательных историй!
          Погрузитесь в мир литературы без необходимости читать!</span
        >
    </div>
    <div class="flex-row-ba">
        <span class="team-developers">Команда разработчиков</span>
        <div class="group"></div>
        <div class="rgb-yuv-conversion">
          <span class="figma-selection"
          >let node = figma.currentPage.selection[0]<br />let nodes =
            figma.currentPage.selection<br /><br /></span
          ><span class="rgb-object"
            >// Takes an {r: 0, g:0, b:0} object<br /></span
            ><span class="figma-selection-1"
            >function rgb2yuv(c){<br />
            return {<br />
            y: (c.r * 0.299) + (c.g * 0.587) + (c.b * 0.114),<br />
            u: (c.r * -0.147) - (c.g * 0.289) + (c.b * 0.436),<br />
            v: (c.r * 0.615) - (c.g * 0.515) - (c.b * 0.100)<br />
            }<br />}<br /><br />function yuvDistance(color1, color2) {<br />
            return Math.sqrt(<br />
            ((color1.y - color2.y) ** 2)<br />
            + ((color1.u - color2.u) ** 2)<br />
            + ((color1.v - color2.v) ** 2)<br />
            )<br />}<br /><br />function isCloseEnough(distance) {<br />
            return distance < 0.20<br />}<br /><br /></span
            ><span class="rgb-object-2"
            >// Get local and library styles<br />//
            —————————————————————————————————————————————————————————————<br /></span
            ><span class="figma-selection-3"
            >let colorStyles = []<br /><br />let localStyles =
            figma.getLocalPaintStyles()<br />localStyles.forEach (style => {<br />
            colorStyles.push({<br />
            name: style.name,<br />
            id: style.id,<br />
            yuv: rgb2yuv(style.paints[0].color)<br />
            remote: style.remote<br />
            })<br />})<br /><br />const swatches = findOne (swatches =><br />
            swatches.name === "$Color Swatches"<br />)<br />let remoteStylIds =
            []<br />let remoteStyles = []<br /><br />swatches.children.forEach
            (swatch => <br />
            remoteStylIds.push(swatch.fillStyleId)<br />)<br />remoteStylIds.forEach
            (id =><br />
            remoteStyles.push(figma.getStyleById(id))
            <br />)<br /><br />remoteStyles.forEach (style => {<br />
            colorStyles.push({<br />
            name: style.name,<br />
            id: style.id,<br />
            yuv: rgb2yuv(style.paints[0].color)<br />
            remote: style.remote<br />
            })<br />})<br /><br /><br /></span
            ><span class="rgb-object-4"
            >// Snapping<br />//
            —————————————————————————————————————————————————————————————<br /></span
            ><span class="figma-selection-5"
            ><br />function colorSnapper (node, propertyArray, xStyleId) {<br />
            let colorCandidates = []<br />
            let itemYuv = rgb2yuv(node[propertyArray][0].color)<br /><br />
            colorStyles.forEach (style => {<br />
            style.difference = yuvDistance(itemYuv, style.yuv)<br />
            if (isCloseEnough(style.difference)){<br />
            colorCandidates.push(style)<br /><br />
            }<br />
            })<br /><br />
            let colorTolerance = 0.03<br />
            switch (colorCandidates.length) {<br />
            case 0:<br />
            figma.notify("No matches found");<br />
            break;<br />
            case 1:<br />
            node[xStyleId] = colorCandidates[0].id;<br />
            break;<br />
            default:<br />
            let closestMatch = colorCandidates.reduce ((acc, current) => {<br />
            if (current.difference < acc.difference){<br />
            acc = current<br />
            }<br />
            if (<br />
            current.difference < acc.difference + colorTolerance<br />
            && current.remote == true<br />
            && acc.remote == false<br />
            ) {<br />
            acc = current<br />
            }<br />
            return acc;<br />
            });<br />
            node[xStyleId] = closestMatch.id;<br />
            }<br />}<br /><br />function masterSnapper (node) {<br />
            if(node.fills.length > 0){<br />
            colorSnapper(node, "fills", "fillStyleId")<br />
            }<br />
            if(node.strokes.length > 0){<br />
            colorSnapper(node, "strokes", "strokeStyleId")<br />
            }<br />
            if(node.backgrounds){<br />
            colorSnapper(node, "backgrounds", "background StyleId")<br />
            }<br />}<br /><br />nodes.forEach (color => <br />
            masterSnapper(color)<br />)</span
            >
        </div>
        <span class="heart">{❤}</span>
        <div class="primary-general">
            <form method="post">
                <div class="wrapper">
                    <button type="submit" class="button" name="button"><span>Hover Me!</span></button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>