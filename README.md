# Demo
- https://corselia.github.io/extract-jancode-from-text/

# Summary
1. Input (Copy & Paste) text to left textarea
    - The format of text doesn't matter
1. Click button
1. JAN (EAN/UPC) is extracted to right textarea
    - On default setting, extracted number is Japanese comapny code style
    - Japanese company code style begins `45` or `49`
    - JAN's length is `13` characters

# Note
- JAN's rightfulness (actually it exists or not) is NOT guaranteed

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
  45345678901
  453456789012
  4534567890123
  49345678901
  493456789012
  4934567890123
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
4534567890123
4934567890123
4981732408290
```

# Screenshot
![screenshot](assets/screenshot.png)

# Bug
- After clicking button, its styling isn't back to initial one

# Reference (Japanese)
- [JAN/EAN/UPC | バーコード講座 | キーエンス](https://www.keyence.co.jp/ss/products/autoid/codereader/basic_jan.jsp)

# TODO (I WANT)
- Rewrite with React

# LICENSE
- [MIT LICENSE](/LICENSE)
