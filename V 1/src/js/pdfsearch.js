  /**
   * 加载pdf
   */
  function loadPdf(fileURL) {
    PDFJS.workerSrc = 'js/pdf.worker.js';
    PDFJS.getDocument(fileURL).then(function (pdf) {
        var id = '';
        var idTemplate = 'cw-pdf-';
        var pageNum = pdf.numPages;
        createSeriesCanvas(pageNum, idTemplate);
        totalPageNum = pageNum;
        renderPDF(pdf, pageRenderNum, 'cw-pdf-' + pageRenderNum);
    });
  }
  function renderPDF(pdf, i, id) {
    pdf.getPage(i).then(function (page) {
        // 识别pdf中文本
        page.getTextContent().then(function(textContent) {
          var str = ""
          for(let j = 0; j < textContent.items.length; j++) {
            str += textContent.items[j].str
            console.log("page.. str = " + str)
          }
          console.log("0")
        });
        });
    
  }
