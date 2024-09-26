from selenium import webdriver
from selenium.webdriver.common.by import By
from selenium.webdriver.common.keys import Keys
import time
from sys import argv

url = argv[1]
driver = webdriver.Chrome()

try:
    driver.get(url)
    input_pagina = driver.find_element(By.ID, 'nome')
    input_pagina.send_keys(argv[2])
    button_element = driver.find_element(By.ID, 'botao')
    button_element.click()
    time.sleep(100)
except:
    print(f"A url {url} está errada")
