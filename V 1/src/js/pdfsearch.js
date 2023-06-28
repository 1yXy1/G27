
  var pageRenderNum = 1; // 当前渲染页码
  var totalPageNum = 1; // 总页数
  /**
   * 加载pdf
   */
  function loadPdf(fileURL) {
    PDFJS.workerSrc = 'js/pdf.worker.js';
    PDFJS.getDocument(fileURL).then(function (pdf) {
        //用 promise 获取页面
        var id = '';
        var idTemplate = 'cw-pdf-';
        var pageNum = pdf.numPages;
        //根据页码创建画布
        createSeriesCanvas(pageNum, idTemplate);
        totalPageNum = pageNum;
        // 渲染pdf
        renderPDF(pdf, pageRenderNum, 'cw-pdf-' + pageRenderNum);
    });
  }
  /**
   * 渲染pdf
   */
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