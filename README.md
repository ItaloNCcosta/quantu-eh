# quantu-eh
Api para converter moedas com base na cotação.

## Utilizar
Os parametros são passados por query string na URL
1. **Endpoint para converter moeda**
  - **GET /api/currency-convert**
    ```
    curl -X GET 'http://localhost:8000/api/currency-convert?from=USD&to=BRL&amount=10
    ```

## Codigo de Moedas
Codigo de moedas usadas na api. Caso não encontre a que esta procurando, Click no [link](https://economia.awesomeapi.com.br/xml/available) e verifique a lista completa.

### USD (Dólar Americano)
- **USD-BRL**: Dólar Americano / Real Brasileiro
- **USD-BRLT**: Dólar Americano / Real Brasileiro Turismo
- **USD-EUR**: Dólar Americano / Euro
- **USD-JPY**: Dólar Americano / Iene Japonês
- **USD-CHF**: Dólar Americano / Franco Suíço
- **USD-CAD**: Dólar Americano / Dólar Canadense
- **USD-GBP**: Dólar Americano / Libra Esterlina
- **USD-AUD**: Dólar Americano / Dólar Australiano
- **USD-CNY**: Dólar Americano / Yuan Chinês
- **USD-MXN**: Dólar Americano / Peso Mexicano
- **USD-ARS**: Dólar Americano / Peso Argentino

### BRL (Real Brasileiro)
- **BRL-USD**: Real Brasileiro / Dólar Americano
- **BRL-EUR**: Real Brasileiro / Euro
- **BRL-ARS**: Real Brasileiro / Peso Argentino
- **BRL-AUD**: Real Brasileiro / Dólar Australiano
- **BRL-CAD**: Real Brasileiro / Dólar Canadense
- **BRL-CHF**: Real Brasileiro / Franco Suíço
- **BRL-JPY**: Real Brasileiro / Iene Japonês
- **BRL-CNY**: Real Brasileiro / Yuan Chinês

### EUR (Euro)
- **EUR-BRL**: Euro / Real Brasileiro
- **EUR-USD**: Euro / Dólar Americano
- **EUR-GBP**: Euro / Libra Esterlina
- **EUR-JPY**: Euro / Iene Japonês
- **EUR-CHF**: Euro / Franco Suíço

### CAD (Dólar Canadense)
- **CAD-BRL**: Dólar Canadense / Real Brasileiro
- **CAD-USD**: Dólar Canadense / Dólar Americano
- **CAD-EUR**: Dólar Canadense / Euro

### GBP (Libra Esterlina)
- **GBP-BRL**: Libra Esterlina / Real Brasileiro
- **GBP-USD**: Libra Esterlina / Dólar Americano
- **GBP-EUR**: Libra Esterlina / Euro

### ARS (Peso Argentino)
- **ARS-BRL**: Peso Argentino / Real Brasileiro
- **ARS-USD**: Peso Argentino / Dólar Americano

### JPY (Iene Japonês)
- **JPY-BRL**: Iene Japonês / Real Brasileiro
- **JPY-USD**: Iene Japonês / Dólar Americano
- **JPY-EUR**: Iene Japonês / Euro

### CHF (Franco Suíço)
- **CHF-BRL**: Franco Suíço / Real Brasileiro
- **CHF-USD**: Franco Suíço / Dólar Americano
- **CHF-EUR**: Franco Suíço / Euro

### AUD (Dólar Australiano)
- **AUD-BRL**: Dólar Australiano / Real Brasileiro
- **AUD-USD**: Dólar Australiano / Dólar Americano
- **AUD-EUR**: Dólar Australiano / Euro

### CNY (Yuan Chinês)
- **CNY-BRL**: Yuan Chinês / Real Brasileiro
- **CNY-USD**: Yuan Chinês / Dólar Americano
- **CNY-EUR**: Yuan Chinês / Euro

### BTC (Bitcoin)
- **BTC-BRL**: Bitcoin / Real Brasileiro
- **BTC-USD**: Bitcoin / Dólar Americano
- **BTC-EUR**: Bitcoin / Euro

### ETH (Ethereum)
- **ETH-BRL**: Ethereum / Real Brasileiro
- **ETH-USD**: Ethereum / Dólar Americano
- **ETH-EUR**: Ethereum / Euro

### LTC (Litecoin)
- **LTC-BRL**: Litecoin / Real Brasileiro
- **LTC-USD**: Litecoin / Dólar Americano
- **LTC-EUR**: Litecoin / Euro
