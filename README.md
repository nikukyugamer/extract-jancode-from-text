# Demo
- https://corselia.github.io/extract-jancode-from-text/

# Summary
1. Input (Copy & Paste) text to left textarea
    - Text format doesn't matter
1. Click button
1. JAN (EAN/UPC)  is extracted to right textarea
    - On default setting, extracted number has Japanese comapny code
    - Japanese company code begins `45` or `49`
    - JAN's length is `13` characters

# Note
- JAN's rightfulness (exists or not actually) is NOT guaranteed

# Input sample text
```
4568995219448
         4571922215766
abcdef      xxxxx4583995219745xxxxx
abcdef
  123456789012
  223456789012
  323456789012
  423456789012
  453456789012
  493456789012
  523456789012
  623456789012
  723456789012
  823456789012
  923456789012
      abcdef
12345678901234567890
   3535123712630
                abc4981732408290abc
```

# Output sample text
- Input text is above `Input sample text`

```
4568995219448
4571922215766
4583995219745
4981732408290
```

# Screenshot
![screenshot](assets/screenshot.png)

# Bug
- CRITICAL
    - If the number which begins `45` or `49` and its length is over 13 characters contains the input text, its number is regarded ad 13 characters
        - ex. `45123456789012`
            - This number has 14 characters so is not valid for JAN
            - But `4512345678901` is extracted!
    - Because of incorrect regexp, so I must modify it soon
- After clicking button, its styling isn't back to initial one

# Reference (Japanese)
- [JAN/EAN/UPC | バーコード講座 | キーエンス](https://www.keyence.co.jp/ss/products/autoid/codereader/basic_jan.jsp)

# LICENSE
- [MIT LICENSE](/LICENSE)
