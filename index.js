const element = document.documentElement;
// Configure the options for html2pdf
const options = {
  filename: "my-document.pdf",
  margin: [0, 0, 0, 0],
  image: { type: "jpeg", quality: 0.98 },
  html2canvas: { scale: 2 },
  jsPDF: { unit: "in", format: "letter", orientation: "portrait" }
};

// Create an instance of html2pdf, pass the HTML element, set the options, and save the PDF
html2pdf().set(options).from(element).save();
