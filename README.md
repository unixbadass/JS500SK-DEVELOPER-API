# JS500SK-DEVELOPER-API
Create a contract shared between multiple users to make profit from JS500SK.

## API CALL EXAMPLE:
```
http://your-ip.com/sdk/create_contracts/?developer_key={key}&invoice={btc_amount}&period={Month_Amount}&earner_fees={1%}
```
## Output Example:
Output would be like this...
```
Contract Period: {amt}
JS500SK Earnings: {amt}
Your Fee Earnings: {amt}-{fee_amt}
Estimated BTC from contract: {amt}
Panel URL: {direct_link}
```
### developer_key:
```
The contract key / developer key that you have received from us, it is used as identification for the contract issuer.
```

### invoice:
```
This is the amount that the contract buyer is going to pay for using JS500SK.
```

### Period:
```Selfexplainary, it's the period of time that the contract will be running.
Highest amount of months per contract: 5.
```

### Earner_fees:
```
This is the amount that will be added upon the contract, if you put %1 fee, their will be added %1 extra to the contract.
You decide the fee that should be added on top of the contract price to earn money, people who abuse fees by using 100% fee, will be suspended without a refund.
```

