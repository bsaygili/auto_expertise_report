<!DOCTYPE html>
<html lang="tr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Mini Landing Page</title>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background: linear-gradient(to right, #00c6ff, #0072ff);
      color: #333;
      padding: 2rem;

    }

    h1 {
      text-align: center;
      margin-bottom: 2rem;
    }

    .preview-container {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(500px, 1fr));
      gap: 2rem;
    }

    .preview {
      border: 1px solid #ccc;
      border-radius: 8px;
      overflow: hidden;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
      background: white;
    }

    .preview iframe {
      width: 100%;
      height: 200px;
      border: none;
    }

    .preview a {
      display: block;
      padding: 1rem;
      text-align: center;
      background: #0072ff;
      color: white;
      text-decoration: none;
      font-weight: bold;
      transition: background 0.3s;
    }

    .preview a:hover {
      background: #005ecb;
    }
  </style>
</head>

<body>
  <h1>Sayfa Önizlemeleri</h1>
  <div class="preview-container"></div>
</body>
<?php
// Sayfa dosyalarını tarar
$files = glob("page_*.php");
?>

<script>
  const pages = <?php echo json_encode($files); ?>;
  const container = document.querySelector('.preview-container');
  container.innerHTML = '';

  pages.sort((a, b) => {
    const numA = parseInt(a.split('_')[1]);
    const numB = parseInt(b.split('_')[1]);
    return numA - numB;
  });

  pages.forEach(page => {
    const previewDiv = document.createElement('div');
    previewDiv.className = 'preview';
    const pageNum = page.split('_')[1].split('.')[0];
    previewDiv.innerHTML = `
    <iframe src="${page}"></iframe>
    <a href="${page}" target="_blank">Sayfa ${pageNum}'ye Git</a>
  `;
    container.appendChild(previewDiv);
  });

  const resizeIframes = () => {
    const iframes = document.querySelectorAll('iframe');
    iframes.forEach(iframe => {
      iframe.style.height = (window.innerHeight * 0.5) + 'px';
    });
  };

  resizeIframes();
  window.addEventListener('resize', resizeIframes);
</script>

</html>