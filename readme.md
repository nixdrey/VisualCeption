# VisualCeption

See project documentation here: https://github.com/Codeception/VisualCeption

# What added?

## Pixel ratio support

If you use mobile emulation with custom pixelRatio option you need to define pixelRatio for VisualCeption as well:

acceptance.suite.yml

```
modules:
    enabled:
        - WebDriver:
             capabilities:
                 ...
                 chromeOptions:
                     ...
                     mobileEmulation:
                         deviceMetrics:
                             height: 812
                             width: 375
                             pixelRatio: 3.0
```

Just add pixelRatio option

```
modules:
    enabled:
        - VisualCeption:
            maximumDeviation: 0.05                                 # deviation in percent
            saveCurrentImageIfFailure: false                       # if true, VisualCeption saves the current
            pixelRatio: 3.0                                        # pixel ratio
```
