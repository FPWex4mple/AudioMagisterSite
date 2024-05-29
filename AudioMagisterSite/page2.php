<?php
    if (isset($_POST['button'])){
        header('Location: page1.php');
    }

    if (isset($_POST['VKAnton']) || isset($_POST['GitHubAnton'])) {
        $location = isset($_POST['VKAnton']) ? 'https://vk.com/elorfind' : 'https://github.com/elorfind';
        header('Location: ' . $location);
    }

    if (isset($_POST['VKVanya']) || isset($_POST['GitHubVanya'])) {
        $location = isset($_POST['VKVanya']) ? 'https://vk.com/salm0n_salad' : 'https://github.com/SALM0NSalaD';
        header('Location: ' . $location);
    }

    if (isset($_POST['VKValera']) || isset($_POST['GitHubValera'])){
        $location = isset($_POST['VKValera']) ? 'https://vk.com/igonnacodetillidie' : 'https://github.com/g0c0de0rd1e';
        header('Location: ' . $location);
    }

    if (isset($_POST['VKEmir']) || isset($_POST['GitHubEmir'])){
        $location = isset($_POST['VKEmir']) ? 'https://vk.com/opopm' : 'https://github.com/emiven377';
        header('Location: ' . $location);
    }

?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AudioMagister</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500;700&display=swap" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@400&display=swap" />
    <link rel="stylesheet" href="assets/css/page2.css" />
  </head>
  <div>
    <div class="main-container">

      <form method="post">
          <div class="flex-row-a">
          <button type="submit" name="button">
            <div class="ellipse"></div>
            <div class="arrow-line-down"></div>
          </button>
          </div>
      </form>
        <span class="audio-magister">AudioMagister</span>

      <div class="flex-row">
        <span class="panchenko-anton" name="Anton">Панченко Антон</span
        ><span class="khalipov-ivan" name="Vanya">Халипов Иван</span
        ><span class="shevchenko-valeriy" name="Valera">Шевченко Валерий</span
        >
        <span class="audio-magister-1"
        >:root {<br />
          --default-font-family: -apple-system, BlinkMacSystemFont, "Segoe UI",
          Roboto,<br />
          Ubuntu, "Helvetica Neue", Helvetica, Arial, "PingFang SC",<br />
          "Hiragino Sans GB", "Microsoft Yahei UI", "Microsoft Yahei",<br />
          "Source Han Sans CN", sans-serif;<br />}<br /><br />.audio-magister
          {<br />
          display: flex;<br />
          align-items: flex-start;<br />
          justify-content: flex-start;<br />
          position: absolute;<br />
          height: 67.8%;<br />
          top: 0;<br />
          left: 0;<br />
          color: #2b2b2b;<br />
          font-family: Ubuntu, var(--default-font-family);<br />
          font-size: 36px;<br />
          font-weight: 700;<br />
          line-height: 40px;<br />
          text-align: left;<br />
          white-space: nowrap;<br />
          z-index: 1;<br />.rgb-object-2 {<br />
          position: relative;<br />
          color: #888888;<br />
          font-family: Roboto Mono, var(--default-font-family);<br />
          font-size: 5px;<br />
          font-weight: 400;<br />
          line-height: 6.25px;<br />
          text-align: left;<br />}<br />.figma-selection-3 {<br />
          position: relative;<br />
          color: #888888;<br />
          font-family: Roboto Mono, var(--default-font-family);<br />
          font-size: 5px;<br />
          font-weight: 400;<br />
          line-height: 6.25px;<br />
          text-align: left;<br />}<br />.rgb-object-4 {<br />
          position: relative;<br />
          color: #888888;<br />
          font-family: Roboto Mono, var(--default-font-family);<br />
          font-size: 5px;<br />
          font-weight: 400;<br />
          line-height: 6.25px;<br />
          text-align: left;<br />}<br />.figma-selection-5 {<br />
          position: relative;<br />
          color: #888888;<br />
          font-family: Roboto Mono, var(--default-font-family);<br />
          font-size: 5px;<br />
          font-weight: 400;<br />
          line-height: 6.25px;<br />
          text-align: left;<br />}<br />.heart {<br />
          display: flex;<br />
          align-items: flex-start;<br />
          justify-content: flex-start;<br />
          position: absolute;<br />
          height: 15.15%;<br />
          top: 12.27%;<br />
          left: 39.43%;<br />
          color: #ffffff;<br />
          font-family: Inter, var(--default-font-family);<br />
          font-size: 96px;<br />
          font-weight: 700;<br />
          line-height: 116px;<br />
          text-align: left;<br />
          white-space: nowrap;<br />
          z-index: 6;<br />}<br />.primary-general {<br />
          position: absolute;<br />
          width: 21.62%;<br />
          height: 6.27%;<br />
          top: 88.26%;<br />
          left: 39.43%;<br />
          background: #ffffff;<br />
          z-index: 8;<br />
          border-radius: 30px;<br />}<br />.rectangle {<br />
          position: relative;<br />
          width: 337px;<br />
          height: 48px;<br />
          margin: 0 0 0 14px;<br />
          background: #ffffff;<br />
          z-index: 9;<br />
          border-radius: 48px;<br />
          box-shadow: 0 17px 33px 0 rgba(255, 255, 255, 0.2);<br />}<br />.primary
          {<br />
          display: flex;<br />
          align-items: flex-start;<br />
          justify-content: center;<br />
          position: absolute;<br />
          width: 99px;<br />
          height: 20px;<br />
          top: calc(50% - 10px);<br />
          left: calc(50% - 49.5px);<br />
          color: #010101;<br />
          font-family: Ubuntu, var(--default-font-family);<br />
          font-size: 18px;<br />
          font-weight: 700;<br />
          line-height: 20px;<br />
          text-align: center;<br />
          text-transform: uppercase;<br />
          white-space: nowrap;<br />
          letter-spacing: 3.78px;<br />
          z-index: 10;<br />}<br
          /></span>
        <div class="div">
          <span class="let-node-selection"
          >let node = figma.currentPage.selection[0]<br />let nodes =
              figma.currentPage.selection<br /><br /></span
          ><span class="rgbyuv-function"
          >// Takes an {r: 0, g:0, b:0} object<br /></span
          ><span class="let-node-selection-2"
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
          ><span class="rgbyuv-function-3"
          >// Get local and library styles<br />//
          —————————————————————————————————————————————————————————————<br /></span
          ><span class="let-node-selection-4"
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
          ><span class="rgbyuv-function-5"
          >// Snapping<br />//
          —————————————————————————————————————————————————————————————<br /></span
          ><span class="let-node-selection-6"
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

<form method="post">
    <button type="submit" class="github" name="GitHubAnton">Github</button><button type="submit" class="vk" name="VKAnton">VK</button>
    <button type="submit" class="github-c" name="GitHubVanya">Github</button><button type="submit" class="vk-d" name="VKVanya">VK</button>
    <button type="submit" class="github-e" name="GitHubValera">Github</button><button type="submit" class="vk-f" name="VKValera">VK</button>
   <div class="image"><div class="rectangle"></div></div>
    <div class="image-7"><div class="rectangle-8"></div></div>
    <div class="empty"><div class="rectangle-9"></div></div>
        <div class="image-a"></div>
        <div class="empty-b"></div>
        <div class="qr"></div>


</form>
      </div>

        <form method="post">
      <div class="flex-row-fa">
        <span class="satvaldyev-emir" name="Emir">Сатвалдыев Эмир</span
          ><span class="tsybenkov-konstantin" name="Kostya">Цыбенков Константин</span>
        </form>
      </div>
      <div class="flex-row-de">
        <div class="image-10"></div>
        <div class="image-11"></div>
      </div>
    <form method="post">
      <div class="flex-row-f">
        <button type="submit" class="github-12" name="GitHubEmir">Github</button><button type="submit" class="vk-13" name="VKEmir">VK</button>
      </div>
    </form>
  </div>
  </body>
</html>
