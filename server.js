const express = require('express');
const bodyParser = require('body-parser');
const { renderFile } = require('ejs');
const pdf = require('html-pdf');

const app = express();
app.use(bodyParser.json());

app.post('/generate-pdf', (req, res) => {
    const { name, age, currentDate } = req.body;
    const data = { name, age, currentDate };

    renderFile(__dirname + '/template.blade.php', data, (err, html) => {
        if (err) {
            return res.status(500).send('Error rendering template');
        }

        pdf.create(html).toStream((err, stream) => {
            if (err) {
                return res.status(500).send('Error generating PDF');
            }

            res.setHeader('Content-Type', 'application/pdf');
            stream.pipe(res);
        });
    });
});

app.listen(3000, () => {
    console.log('Server is running on port 3000');
});
