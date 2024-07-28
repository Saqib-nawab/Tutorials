const pupp = require("puppeteer"); //A Node library for controlling headless Chrome or Chromium
const hbs = require("handlebars"); //A templating engine for generating HTML
const path = require("path"); //for navigation
const fs = require("fs-extra"); //A module that extends Node's fs with additional methods
const fss = require("fs"); //standard file system module

const compile = async function (templateName, data) {
  const templateFilePath = path.join(
    process.cwd(),
    "template",
    `${templateName}.hbs`
  );
  const html = await fs.readFile(templateFilePath, "utf-8");
  return hbs.compile(html)(data);
};
//compiles the handlebar html template with the data feeded from index.js

exports.pdfGenerator = async (fileName, data) => {
  try { //Launches a headless (no GUI) browser instance with Puppeteer
    const browser = await pupp.launch({
      args: ["--no-sandbox"],
      headless: "new"
    });
    const page = await browser.newPage(); //launching on a new page

    const content = await compile("page", data);

    await page.setContent(content); //Using the compile function to get HTML content from the Handlebars template with the provided data.
    await page.emulateMediaType("screen");

    //setting download path
    const downloadPath = path.join(
      process.cwd(),
      "generatedFile",
      `${fileName}-${Date.now()}.pdf`
    );

    let buffer = await page.pdf({ //necessary pdf layout configuration
      path: downloadPath,
      format: "A4",
      margin: { top: 20 },
      printBackground: true,
    });

    await browser.close();

    return Promise.resolve(buffer);
  } catch (error) {
    return Promise.reject("error ", error);
  }
};
