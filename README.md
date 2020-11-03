# PHP Scraper using cURL

![screenshot](./img/app_screenshot_scraper.png)

*Check the feature branch for up to date commits*

## Objectives

1. Target URLS and get DATA.
2. Parse Data.


### Your Uncomplicated PHP Scraper!

With is basic and simple structure you too can have a scraper to help you extract public data from sites. This can help build databases by helping extract data for further dumping and porting to a sql.

### Project Structure

```bash

├── webscraping
│   └── index.php
│   └── curl.php
│   └── README.md



```

## Coding Guide
1. Crate a new index.php file and add following line to pull raw data as a string useing file_get_contents method this will scrape a .html file
    $html = file_get_contents('replace_with_your_url_here');
    echo $html;
2. Create a new file curl.php where our curl function will live add the following this will scrape url with cURL
    function curl($url) {
        $raw_scrape = curl_init($url);
        curl_setopt($raw_scrape, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($raw_scrape, CURLOPT_SSL_VERIFYPEER, false);
        $info = curl_exec($raw_scrape);
        curl_close($raw_scrape);
        return $info;
    }
    $web_data = curl("https://devcode.la");
    echo $web_data;
3. Parse the data with DOMdocument iniciate new instance 
    $dom = new DOMDocument;
4. Pass in to new instance scrapped data $web_scrape add 
    $dom->loadHTML($web_data);
5. Iterate scraped data with foreach and getElementsByTagName() method
    $dom = new DOMDocument;
    $dom->loadHTML($web_data);
    foreach($dom->getElementsByTagName('a') as $link){
        echo $link->getAttribute('href');
        echo '<br/>';
    }



## Built With

- PHP, cURL, and target URL.

## Getting Started

1. Clone directory $ git clone https://github.com/rootDEV2990/ruby_scraper
2. Add url for cURL to connect to in curl.php
3. Open terminal and cd into project directory folder. 
4. Call curl file from project folder in terminal and execute with php 
    php curl.php



### Prerequisites

PHP and Apache installed on your computer to be able to run the script.

## What it does:

1. Targets a URL.
2. Gets RAW HTML.
3. Extracts targeted DATA.
4. Port data to your site.

## Authors

👤 **Miguel Angel Enciso Sanchez**

- Github: [@rootDEV2990](https://github.com/rootDEV2990)
- Twitter: [@m29902](https://twitter.com/m29902)
- Linkedin: [linkedin](https://www.linkedin.com/in/miguel-enciso-6474741a1/)
- Medium: [medium](https://medium.com/@website.dev)

## 🤝 Contributing

Contributions, issues and feature requests are welcome!

Feel free to check the [issues page](issues/).

## Show your support

Give a ⭐️ if you like this project!

Bitcoin donations accepted ;)

1AD5ANtHmqemTZ2Qmv5UqJAMijTNyCAH8D 🚀
