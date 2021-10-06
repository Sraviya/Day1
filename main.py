import http.client
import json

conn = http.client.HTTPSConnection("ttblaze.iifl.com")
payload = ''

symb_lst1 = ["NIFTY", "BANKNIFTY"]
count = 0
id_count = 0
for ticker in symb_lst1:
    conn.request("GET", "/apimarketdata/search/instruments?searchString=" + ticker, payload, headers)
    count += 1
    res = conn.getresponse()
    data = res.read()
# print(data.decode("utf-8"))

data_dict = json.loads(data.decode("utf-8"))
res_data = data_dict['result']
write_data = open("ins_id.txt", "a+")
for key in res_data:
    if key['ExchangeSegment'] == 2:
        # 24Jun2021
        if key['ContractExpirationString'] in '24Jun2021':
            id_count += 1
            write_data.write(str(key['ExchangeInstrumentID']))
            write_data.write("--")
        # write_data.write(ticker)
        # print(key['ExchangeInstrumentID'])
print(id_count)
print(count)
# Output: ['English', 'French']
# print(person_dict['result'])
