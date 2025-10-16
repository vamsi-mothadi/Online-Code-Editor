document.getElementById('run-btn').addEventListener('click', () => {
  const htmlCode = document.getElementById('html-code').value;
  const cssCode = document.getElementById('css-code').value;
  const output = document.getElementById('output');

  // Combine HTML and CSS into one string
  const combinedCode = `
    <html>
      <head>
        <style>${cssCode}</style>
      </head>
      <body>${htmlCode}</body>
    </html>
  `;

  // Write the code into iframe
  output.srcdoc = combinedCode;
});
