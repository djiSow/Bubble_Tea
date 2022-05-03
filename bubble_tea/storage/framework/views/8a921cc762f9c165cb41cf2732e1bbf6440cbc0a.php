<!DOCTYPE html>
<html lang="fr">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
</head>

<body class="bg-pink-200">
    <header>
        <div class="bg-white pt-8 pb-8 pl-9 flex justify-between">
            <div>
                <h1 class="text-left">Bubble Factory</h1>
            </div>
            <nav class="absolute top-8 right-32">
                <div class="hidden justify-between items-center w-full md:flex md:w-auto md:order-1" id="mobile-menu-3">
                    <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
                        <li>
                            <a href="#">Promotions</a>
                        </li>
                        <li>
                            <a href="#">Discover</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="flex space-x-6 mr-4">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                </svg>
                
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z">
                    </path>
                </svg>
            </div>
        </div>

        
        
        <svg class="-mt-4 -z-10" width="100%" height="29" viewBox="0 0 1440 29" fill="none"
            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <rect x="-366" width="1920" height="29" fill="url(#pattern0)" />
            <defs>
                <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                    <use xlink:href="#image0_16_136" transform="scale(0.000520833 0.0344828)" />
                </pattern>
                <image id="image0_16_136" width="1920" height="29"
                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAB4AAAAAdCAYAAABL/XHVAAAgAElEQVR4nOydd3wUZf7HP8/M7M62bHogoVdpolLEgh6cvbcLep4NT4KCoKAC6p0Z7s6CBRAEf8aGnjW5Oz3gUCyAooAFBZSidAIJIWU322d3Zp7fH8+Ou4QEQhIgwPN+vfaVsruzzzw78zzf/iWUUgoOh8PhcDgcDofD4XA4HA6Hw+FwOBwOh8PhHPcIx3oAHA6Hw+FwOBwOBxSAfqwHweFwOBwOh8PhcDgcDue4gtsTOPXCHcAcDofD4XA4HM6xh4DL5hwOh8M5+lAAsfhPDodzYhEDdwhwOBzOyQC3J3DqRTrWA+BwOBwOh8PhcDgAmNLG4XA4HM7Rhjt/OZzjhxiAagBRAO3BDf4cDofDYXB7AucAuJDA4XA4HA6Hw+FwOBwOh3NyQgBYwY2GHM7xQgzAXgC7ARiHeK0FgHjER8ThcDgcDqdVQiilPNKTw+FwOBwOh8PhcDgcDofD4XA4xwOm85snN3E4HA6H0wAn+yapAVCP9SA4HA6Hw+FwOJwTFC5vczgcDofDqY9o/MHhNAUB3K7N4XA4JzrcntBMTvYewCK4sMDhcDgcjklyCTG+P3I4nJaAy9scDofD4XDq42S3SXKahgFWsp6XrW+dxOI/Lcd0FBwO50SB2xOaSXOELbN0NIn/rsWPdzxtwMerwHCyCjs1ALwA3PGHBSffHHA4HE5LooPt4aY8YO7pfG3lcDgtxckos3I4HA7n6OMFEAAzFLoBOI/tcI4qNP443gykx9t4gYT9UwC71o7XuW8sFEAYgA0n7jk2lpPVFnswzOsfSFwfJ/t1wuFwWha+7jaTlnIAm39zozHnSKKDpfxr2D9L7UhRAyAIJuhmgAn3LYl+BI6ZTBhsrlKO4GdwOJyjy5HYZ2nS761VsFLBysM5wRVKDofD4XA4Jw8xAH4wffRIUde201L4wZyyEgAXjrxeqoPJixKOjr2Ac/KS7PQ6XoiC3Y9BMDsRkLCxheI/Y/GHus+zL7J1z3bt7H5D2gA4E4Dj6A+5QY6VPnii6KFHas03OZJ2zqYSBbvGnWi9Ng8Oh8M5IjTHAZy88REA1maOhdN4ThSh43DJjj9aGgNxIRdMGPbtrtyzWdP19YauVWSmZWanOlOHAjivhT+XggkhETBnrdn/hoIJTFYA9qTHodDj4/cD8FZ6K1d5A75QpjtjcIY7/Uw077rR4w8gEenaWIHJVDA0sHnWkHB+28EEMNtB3q8hMTemEygSP5ZpTMhC61qDWkswTGsZB6flMMDuwZb6XkUcWQWNgo25uZ8RAlvbZLSue53DaYjkwEi+DnM4nBOFI200Ply8ADxgugHAdAormLwgJ/3eEAaYjBFAog+pVOdhHrMx1NWZmtufcm9Mjy0tr67Y1TGn/ekAugJIB3OkHuy8kscTBjvHCNg5mvuSOUemPtbS7A1FQx/vrd63RhIEO6W0XbvsdoMkUcqNj98GNr8tKddlxh8nI1zeOHrUtX8eL3OvAtgBYAuA7bv27frVbXf70lLSggBqwdbBAIB9hBBzTQWl9GYAfcDu29bo2GsKTbWTxHBilCJtyb38SF//LWVPCINd5zKOvA2Ew2kpDCR8BBxOk+H9NjjHC+aidyhB63CiMCkAGNT4lYDsopRuppR+parqlx1y2pcnv1Cj2uUixHNQv2BD6vxs7NgEAKUAlgL4DsA2AFvBBPNUXde7EUJOJ4ScQSk9TRCEPNRfZp0CCFNKt1BKl1NKPxZF8cuc9JwAAMx6b9bF424c9xKATgcZJ63zEwCoYRhRAFUAqimltYIgaIZhuAkhKYIgtAFTAhr6TgwAOw3DWBk/RjmldC+ltEKSJK+maamCIAwihJxLKR1MCMkgZP+hUUo9hmFsI4RsBbCTUrpZFMVSMMXFB6AtgAsB3ANmEGkNihcF+w6tOLaKQUsJypzWxfH2fZpBG+5mHic9/jiRoQ38fqg9pu7e0hrWQU4i8MkM6OJwOJwTgSjYutZa7AifAHgbwI9ghvkOuq7nEUJ6AuhGCOlKKe0GIFcQhLprccwwjK0AvqOUfiaK4nYAkq7rmYSQHDA9I5MQ0p8Q0h9AagNjoPFjeQBUEEJqABDDMFyEEDuAHEEQ0rB/AG3yXl2fbgcwXewDq2Qd89sTlPY2DONSQsglhJAzkHB2kjrvp4ZhBMEcPT8C+EEQhHVguicBc/j2BdALwGAAVzQwlsbqt3VlEWoYxiefrPhy6nXDL9uRNH4C4EzDMC4hhPQzDCNHFMVeaFq1rcbIO1wm4nASuAD0A7PhlBa+WPhJZ3TeV1hYmAkgB4ks/YiiKFFFUei4WUoKmE1hBdh60SX+uuP53mqqnUQDsM6ghoWAdCKEpKBxzs+6zuZDZY8fDRvS8eTANhNADmZ7bAypaHgfP1HQkbgmk68xM4mgoflL3ssNtB4Zj8OufQ3Nt6dxTnIIpfR4K1vCOTboaNmss8MlDKawmsZUR/xnGGxBrAWwE0BF/HcVLHrRH39POP4/02Bh9jGpfPyd5yrXrvlGdTvdUZ/bHS6ZOCNc98OVlxRHYUFhHwAdwOaBggkPZwAYDrYYp8WfM6OZk/EAqARzhFbFx1gLYG983KUA9kydOnWHoih6fnG+4NzgtFhtVtnQDVttVJWnj33O2j47Ow9M0RfANuYwgN0Aaj9b/ZlvStGUUI6cI3w0+yPV/OAZH7yedv+1d1wH4GYAbQCcWmds3vjn74qPZRuA7QB2jZk5sSbgrdKIxakbxDAAQKARIRqOCjMenCG2TWubCeZ47QRmSLDGz9UDYEe5t3zLfU/fF3LLbj2CiCY4BT1NTtNUWTVkVRbUkGqLRqL2fX6ffMdlNznzL8g3jRg+AMFXF70Tm//F+7HMtMwYjdJYRXVFeObDM1N65va8CEA+gAHxayENrCd0a6GukK+BZUI7wYUpzsnFke6JZVYUaEwWzNGCIrEvZaBxzj8NbP8qBbAJwK9g62g6mIH2FLB1NgtsbTHLtZkPs9JCSvwzZRw/hhlzLzuZ+vRxOBxOaycQ/1lXr2ltGcD++GM3gM984fD8GU8//d16rHfYrTmyEKWWSKzGYrG5pDkPTbemyCmmzuCvqK3wjZn5QEyGM5IChJCLmKfcQ+BuL2b7VFGzaaKnwiNOHjVZHth7YBsAPQC0A9PFDLC9tzr+2Tvufe7BiN9TqRkOW1xnEgRd00g4FhLnTHzO2TajbVuwvbwzgO7xY3WO/0ye471g+uKXKzd8/8Y5fQd/az6RX5wvYgPEs/ucLU7In+AE2ztzwfRS0ynjBbBv3LPj/D6vL2qz2FQJUkTL1dSigiINBNju2Z7aOa1zFwAd4+/vBCZDpII5gjLB5IlcHFipyaycFQXLLP4OwFdgMoxpfA7/85OSjdtWbtipKMp+pZgLXiqwwANHOBKWM1MzxRn3z5AB5IFV+rJgf6O1qVubY7PE5yorPne58fM2q2UFkcjCdsfP71hxrO0nHE59mP2L/XurK7Y47Q45xZHiBruvTH0t5vV5t9SGamd0zu28iFLaFszush1ML7kfwLnHYvDHmFIAfx4/e/yX5/b9ffsbf3/tLQD+DGYjbAgvgD1gNjM72LrwPwBfgNkHAbaGpSFRGcG023EYR9qeYDo9gdYVbG8A2AdmD2iMrcN8fQWYLWF9/Pc0sOuvP4BuSNitzcSVZHtCDOw6NB/Hy/7F7QkcziHgDmBOYzEdWubG2FKb73cASsCMDFX/+uLDADGIccPwa1xggpAGoPL9xe9XLFq1KJzqSpUIrPbUtFSbRZQEGJpmUEEXYMSISAK6poehIWp1WHUhImgRRGKwwsiN5url5eV6nz59iMfjEcrLy2lhYaFOCDms619RFCk3N5eUl5dT5MIqWaRMzUCuAMNCCbVSQyAEhkghWEAhQIRAIMSoYYQBEhGIoRJKIjAQJRYSJTqJEivRomI0Vl1Trc4eP1s91BiWLl0qDRs2LB3AaWCC9xkAsiu9VcbOil0fD+418PEDxv2W4taDQqeYFrM9NvLh9na7/SkAPQF8GlLV51/499xKr98XsBIasOk2v7pP9SuKotU9Tr1zUqxY5SrZqRLVAhsEOSyrkkuKPnTbQ8HDmVsAUBRFKCwsPAWsxNCXhJDK5Of/89l/Mn8/5Pf/SHWlDgMTXlrK6ZschXkkSthQMGHKcgSOzeGczLTWTHez5L2Mxu2XAQCP/HPReys37FxbYxNtPrtkV3VJt0Zj0XSBCqkGEZwg1EYgiDA0DQQGpYIuSKIeVv1aladWS0tJ0wvveiTLKTtngTmNWyMUrIrDW28tenftuq3r/E67U9N03Zrqdlse/OMEEcz4kVy+05RBzMAugCmlLrDv3wyuMefdbBngefnDl8MAMOraUWYJTzOIzAAQrPJXheeWFMUeu/MREczY3QYs6ysLzFDjRkIJdsSPYY2PMXm/MMtsIv6/WrBgJrONQQhs385rgTnkcDicI00s/rO+6kMtgZlJ3JL7d2VM0zat/Pmb/3vhv8//q0QpiSY/GYvFzpUkKaPko5JVIy4fUdnQQRpCKVasCMJh0SwyAMRILOa0OtXD0XmUlxSHRbCkxEgsJazpznuuu9vZKSfvIgATwfabF55+e/qHPr/fLwl0bznKy4tGF8WSjzGreNbvrj3/2oIObTp0BNvr9oBl561YXV6+dVBeXuhQ48gvzhfPjJxp0wKaldqoRGNUiiJqISKxAhabQHXZoIIMiTqIIciUGCJ0GBCgEWroFIIOwKAC0YgmVMk6qVCz1CA2wMjNzSUFBQXa4erZxcXFosfj2U9mKk8vJ264RV/UZ7HqVgt0CFSnAiXUZhiGyxAFuwDDokMQAcDr98YMXY34Q9HQqT16kok3TswAc864AER/2PRD7euL34x1yu5ke/DmCabD5XQAV4E5vptLsqOiOQ7gI+3w4HAaw7fxRwaA9mCybQqYraYl7peWgoLdbwaOrL0lCOCbr39aWdWz4yn/2V2zc9WX36/scF/+mF5ggTxRMCdxID4O9el3pvt3V+wOjrnh7tN7dex5ii/s2/H46898JhDn3pwsOQIAMX9MCmthGVZIIQ3SvVf/+V8dctoPOULnwKmf1hbcBiSCyk399VCoAIre+vit//y4dUOZW5S9dqs9rEu6NWpEU0AtGQL0FKpTKxUEQgyD/mZPANUhSJoajeo1wRo9psZiD9/+0Ctd23UZfETPsHnUApgHYOWnq5d4Fi3/SHPZXY21J5g6u9kGQ0TD9oRg0X+K/IZItLuvGWWJv860J+gAwoFwIPqPeU+GDSKIf7n9oRS33d0GzKaQhURwR332BCPp84H97QkCEqX5zaDDCJid4hQcvI0ih3MA3AHMOVxaamOsAfCpqqqvPLVy5TJl+PADnI2U0t5gxtK0tZvXqivWf+NJdbp2RC3RTSOHj4wccMSTiFmLFslZoreLZtBTg5HQqX+8ML+NbJHJwq8/Wrl++bo36kZa12VP5Z6b8rLyrgLwA4AiQoj/YK8/WixdubTzsLOGTQLb0F6cN2/ewpEjRyb3n7kHwDNo+ciuI+0A5nCAREbCyV4OlvdGrUM0Ft3636//O3TE8BF7m3OcFz94vfPIK/54sWyR/wGWSdMaqQir6jSHzTajpQ64dOlSaQd2SM5KZ2zEiBF6fa+hlAqEkIPujeaxSqOlGSIRU3UqyiLVHbpB7IIoOGBQG4EhGTAkj98nA4DTlgJCDBIMhWIGMYJRLardfNHNJC+rTS4A/97qvZvf+fQdTSNC5NYLb+yVm5n7AE7OrInWvM9qaH6fTg6Hc3gcyftu7bIflv1h+MDhW8x/UEo7ApgCoO/aLWtfnvn2zH/NU+a1Cn2SUjoUwM1qTA2/uujVmWOvHVt6sNf/9eW/DRx11Z3XdmjTru1rC94ISBZrKQhdZ5HITzdfeHPFURp2q+XdT97NC6mhfp3bdM37/eBhZgBDKYAvCCEHVPp6ef7LXQb1OvOG03v0vxNA72Z+fLLjtqk9Ruseh8PhHBwzINgsXXukZcxNq35e9ejZp579H/MfL730kqW8vFxvyA6XX5wvXpV6Vea22m1eZYQSre81JtvKt+V3advlKjDHkemIioA5htIAnINEe7eTmeTv/KQnGotGP1i+8OybLrjhh+Yc59l3XsoSEBx008V/fCE3s223lhpfCxOIRKPF7614Z2xL+QZe+v4li9VvFXdip6YMb1wy1MEo/rg4I0IiqYDVWZ89QSfU4vP7DQOG1WVzigDgDwc0QkhQjar6LRf9MdY2u202gFiZp2zne4vfC1GdqjdffHNmbnbueADXofUlQRwNzCoWR2OtPxxavT2BL5Scw6WhG8wPoAysxEm0zuvMiDwdQGTD9l9qqryVG2TZMv+svmdtqO9g+RPy7avWr8owDHQSCDnFaXPi4sEXlRkGtUciQZ+iKDsO5eQ8kRl/+eUqWJnQTQBK7sGow3p/u+x273299uslIhE7hEPhVEVRgq1hPrPatRdX/LTKH4lGvoVh7Bt5x0gVI9lzT//z6QHhSOROu812JMp6tDZjNOfEwgtg85Y925ZrWtTo1anXZWDls05WknvMtPR9FwVTjimYjCMmfY4GVlZ5X/x/rSWi1UuIsKDki5KaJr2bgqz6eVXOkH5D+oFlsFwMpgxXIKEU28ECZxqa7xBYpPrRKKXvBDVyJr/w6DWGYHhTLO6AQQw1FK6teXrc02VNOeBwFkSmAcCk2ZPyAtFI54gay3r0tgfbdW3XtR1Y5k8NpXQzgE3z5s3bmBxcVM+x9sUfh82flT9nhM8PnA60yQBAgmpw7y87f/FBgkUP6xUAbsDJ6QBuzRjgMgCHc7Q5knaI04YNGPan5euWzzqv/3keAFi8cnFAssjr7VYrdTvdsfPOOM8yD8feAbxgwQLH1+u+rxRIbJZ3t3f72GvHHrIa1N9HPbb673hs9dEY3/HG4rWLnd2yunUBcHpU1Xqu/PkbC4AKEKIaUiwdicya3xh19ajtdyjKC6OuC+y2WqxDB/UeZJaVNjPU65ZAF8BkqhwcWNUjWadszr7CdVMOp/EQtHxFiYOxa0f5jl3J/1irrZVzkBMF00UPoGREiV6CkkbpFl1zu5asWL/ic+jIEamoqhYxYrVowSHdhwQ+//nz7M6ZXa/plttlFFhrt6a0QToSOvixILl0c0sSA3O4m8dOzh7VwTIyy8EyMs9G63DCxQgRvnrm/Sd+auoBpsx9Mn1wr559rh9+/cVg9gQHmD3BPHcrWABCQ9dOOP7c0chMdehGzLXh5y1X3P3kvdVpqel+m9WmUl30bUhfvadkREm9AeEHY/Sg0THEq99MmTsl3dCNbjX+2pxHbp+c1yWvS0ewUtxesEpm64tKijaOHjG6tqHjjbh0RA1Y4tthU6AUOELDQ33AWo8Y4Wh43Q+/7NjldKlWH/GV5iJ3G1rHdXesSE4oaS20ensCzwBuHAYSwn6r/kKPEhGwhUwFm5cQgK/D4fCn3pB3vUYtPkIiBAAIIcSqWzVVVqNiUIzkNaIkFYcDsHLQ69WdmSINO0/vNajj5NsfeADAlUiU09TA7k3zJ5BQluveq+bvBpjQRpNeJ4IJMzJaVx/hw6GlS7NzDs2hqiEYYCVbKipqKhfHNPW1Dm06rAMASumfALyGpmcCm8JpcoSZqfgeb9eAAdbnLgx2b5okC7Tm/muemwR2r5r3uQEgVFFTWa4bse2EkL2ggg4BTlAqU4ASdrwA1Y2frbJ1VVZqFgHwIVhZnjDYPtaQAmnB/n3nzbKVZlkhKw6cdzPoyfxezHFqSPTbCYXCoVCVr2pJNBqd1qNjj62NnLP9KC4uFi+89MKzI6p6MRVgg4GQIEDXdZ3quh6z2WzZOWk5V4L1G6w7r34A1ZU1lV+E1JAz1ZXaNy0lLSN+bgL2n3czyhpIzL35iCLRdy8Z8z0EAEKRkBEKh8Ss9KyU+Ht2gX3/e0uryj7rmN3u3brnN+nVSSnT7pzW/77n7yuNeCNVRUpRg3KEUjzH9fD1d11gFa1/ADAIrDcgjUQjvpramh1EFDdRTV8rp8j/zXJk7WnM/Nb7OYpiLSws7AzAOvvDorAcQ6wgvyAbrLfSmQD+BFbiyQdgWfw8zX3rd2AZRgb2v27MfcmCRC9DDofDOVExSxuqYGujKZ8DbC00+1EmVw8wjb3J/zP3KdNRZ8oIBMAjq39e/W/lNSUiWATf/Kfnt4qKR5zWD6WUlJeX2w2XYScx4jCoYQCAjdqMWCxmtblcHdJTUs4FcBFYaVzz2kuNP7jNKJEEYMrBnNYBBXNgBbB/xpJpJ4nV+Gq8ITVSLRJBB4GNAhTUQJv0NqIoirlg5erNdVdM+t08linPnkjfe/KeJQB4hBAyJ97CLAPA5QD8JctKVja3olOjBkPpeQDeB9N1DvvtYN+9hoRNzPy/BcenPaEaTJ9P1kXrswkKSc+ZpZVNWSMMoLrGX7MprKqVhBCDECKBUlvcniCAEBUU26muf0EsZHdueu58sOqFGpheHUs6XjKm7cCBRDY34v9LblNU97zM78hcR2nS/6MAwsFwMFxdW/NtKKK++NikR5aXlBy+8xMAVFXtH9WiV/sjgTQYCBEBMV3XqW7omt1qd2WnZ58F4HzsbzM1562m0lO5JBQJCanO1L5p7rQcJOwn5iM5MSzZbvtb7/H4sWLYf/6SbRAkFAnRYDhIstOzHfGxbAGwF8w5uwLAG4SQSPIxJkyfYJ8+YXoPANFpJdPKp4yY0qDjVlmqSBOGTBgkS/LNskU+F6x/MolEI+Hq2upSQRA3AvRXWZY/nP3c7I1NTaSKrx3tALjnfDAnRgQSHnPNGLMtRR8At4PJFwDwPYBVYN97AMBZAAYicX3XtSlI4P2QOXXgDuDGEQDb6B3gRjkAWALgWQBrkHAC6yUbSiIj+o6INfAefp1xDgtN064khPwJwHkgyBWIEAXrcbUNwFawjHMPgEowR5uORA8HB1jktmkgsoEJDZ74ayNgwkIKWG+GU8B6KffH8XeP62Dno4EpYyeSotWaUXFw5XYbgKJgMDhv5MiRVSUlJabBEpTSCwG8joRAdziEAPwI5lBygUVhGmBKQ08AmU045rEkAFbWfSHYPW06V9OQ2DcMsHvYBTbX2WD93PLi/98dCoW+/sOUP/w0JHNIQ3sQAEABgEKFUtAUAA+D3fM/APgcTHFIFuDNct2nArg0Pq7lAH4Gm+dzwAT0ngC6IKG0hcHWKE/8/Rlg60oULHhqL4CfAHz+2erPvr9o0EU+NH+PJIqiHHAdKopCJ86a3P+5cU8tAOtNlawc1AB4A8DcESUjtpdsKKFze8xNvefme84GMARsPTF71mjx15vKUmr8vJxgjt9NAD4DW49Nx6Yef868V/SSkpLQ3A0bjKWFhZlgTtAhAPoB8G/cufl/fTr3/F/dcxg364E+s8Y9+6phGHZK6VNzP5n7wfjLxzecIUVBKKgFieydcElJSbikpAR9+/aliqIkOw6aBKW0M9g109mgtIoAGwghe5FYD3Sw/jy9wa4VP4AvwBzCISSMFOY+ZQYhWcEifX/XnPFxOPWQnCXBA1o5rYGdAL4DsA6sPK8HbL/QkciuTAPbf8w1P4SEXm5m77rjjywwuaAt2J7cBUA2pdRnGMY6QsgSQRBejK/VHM7hcKB8tVQRC4cV2pHIDlYBdARwB4BRYDLSyU4YzCCfheM3yPpEpBxAMYD5YGtvGtga6gPTUSpHlIyIoeTANxYXFwNMB+sBdo2ngn2/GfHjpMV/z4gfMzX+v+PNoVgfYTCd8RswPW45IWTrrc/c6nzzwTcvAHA12HnPIYR8fqQHQyntB+CfYLrs4c6vBqbPbgW7N9ORCFDuh6Y5lY8lUQD/BjAHwK9IyLsuJNaeZHuC+Vx3sOvZCbZWfQfgy6lTp4YVxO0GDaAoCs2fkG97/fE37nba7ReC2TH+CzavbiTs5AaYPtoBzHk6GMxJuQxsbxkCFjx8Cth9ZWbPamByUhkatif8CmDF4uWLV1y65NIKKM3Ohm7QnvDg7Ac7P3PvM9PBAh2SkxiCAP4HYNrootE/FZUX6S8NfMlWcGXBaWD6bA7Y9ZQWH3slWJUtAqb7mvYGCpZZuxzsulTB5i3ZngAAYsmyknBJZUm4OL/Y7Ec+AMwmIwH4jBDyVt1zuHf2pLzZ906bDOAKA8bLL37w4iv3Xn9v9cEmIz8/X3zllVdS3W73AfaE+Lw0a77zJ+envvrX1+anOF1DDUo1AqwmhGxA4n6k8TnqA+aEVgF8BWZX8IJlZ/uRqPYmI3H9dAZwWXPGxznx4A7gxmEa7pMjhk4momALTQTxLCqwRTu5zKZv2Q/LFg0fOHzVMRvlcYryupI26upRg902d09PwENBUaMLwiZJpb906NDhgDJVJwOUUguANwH8Hsyp8A6A7ZNmT1I9NR5VckpRopGYpEq6ClWTM2QdAPw1fmKFVZAgCSJEAQCC9iCVqCQAQFh0a1mibmiSZpivhQ2WcESQM1PTHDPufzIbwDUACtB6+2fWhSY9TuYyIEebhjKAYwCmf7nmy1dn/Pf1yg+Ved4D3khpNpjz0A4mpPUDE+w0MEH+VwAXArge+3+nSwA8WfJZya/vLZ0fy3G4BEMyxHA4jL/e+VepR8ceL4PdM8cTBth+shpMwdHB5iEItt+afY+CYMpOJdgeVAZg7yfrPtHmvD1HGOAYEFaUw+jVQkHGPjk2QxUFO7WEQj6fL1BSWJJwHrNvlVJK24Hpf5cCuOrp157e+lHpR+HO6Cw5rU6nKgp2gahyZVWtdcqdk51nnnKGUF1d7Zvw4gTVbrHrumYhVDTEqOoX+nYbgCm3TDAVOAAw/H4/KfPts1oEki4JUnsARBCEX5Z8teS726+//aBKSWPYtGvrILfd/ufcrNy763n63wAeA+DdWbWTarWa7mzjpG1dbV1gypipNAsAKjdUbtjeN6dvEKbwF38AACAASURBVAAURSFXXnmlzWq1yhNeKhQ6d8ugolP0FxUUaeb8KcWKpTC/MBtM8astKSnZPWLEiN/KouUr+Va32+2iMbvNRgyjMoRAiTI3UHeQ5dXl+W0z2hbH/4x4/d7F1T7vBxaLsAcG0kHQDiCdAJqtadrXG/ZueOOqQVcd0WojU+ZOSX/ynifngynsC3/4Zd2cp17/x5b09HTENIlW+2r0wjse6jig94BpYMr+9AfmPPCSr8oXsjqsGtFIzCCGEaSCAPgxfez0yzLdmflgwQaZYPPfFD4EMyjkgq0xtvixcsCUyWQ0MEW7FEy+c8ff1x4nZp9yHdzxeajKFRzO0WAJgNefe/e577//9XtfupweJiqJyW5Z1yTNAABJk4TaWK1khN2i1RaickSmAKBDNzRoRhRRIyUjhQKAWqOKEiQhBKtErLrFQlVJpxZrTbBKfuSWB9MG9Rl0HoAbweT6ceNnj/909vjZhyyzfCKye/fu9ppITyWCkZXmSHOrUbUyFAt917lt5+3HemzHGy//9+U2d11916VgAcRmNSpTxssAs4/oALqBGfZPRsyM0tbWp+9kZtXm0s2Te3bs+WVzDnLZrHFyhxpV1OyaKBuypFt00VAN0ZBsIo0ZokgFSZCjQqWnVvzLzZPEAf0GOJBwGLvBHG4ZYDKvmTWfEn8uA0xmdePwbRtHsiSoAaaDbgKwGCzLcCsURRiHaldMiqXEIEqyRqvn1qPPtDTTXp2WMunOSUPA5tAC5jw8A2xufwFzUvcBcDP2D0jZC+Ch95Z9+NW7H70fzXOnEUMyRACoigSN+64Z/dT5p5/3pyM9/haGggUp/whgOxLBZKZzLBh/mK2ivGD2hwCA0oWrFwbmvjFXapPZJjpPObzWEHcod6RJ9hQXtHBMi2m185R5kfzifLEkv4Q5BwnonOI5rjH5Y8YA+DOAaU+8NfOjncs3VmEgEC13OAW75hCikD2hannS7Q+5zjzlDKG8utr/8IsPRGWLHDPtCQRE0DSNZricdOrdT+Sl2GwEAPx+P62orRAFCE7JInUHEdIAbBNjZFn79u13N3dyN+3Y1MVtd4/Mzcl9FAf6Q74BMA5ARUVFRaTWqDXcKW7S1tVWBrunM5CotFi7devWbd27dzcdwFi6fals1+zWB6f/XezQxi3KkAOd0TmqFCoU5Ldgq1QwB3pkRknJzokjRvxmIy94qcACDxzQ4dAkK5FoNFg0peiA7N5yT/nv2qa1fRVsT9a9fu+PNX7vvwRB+kYkNJUS2pZS0pGAdjQMY8OmnZvevezsy3Y0d+4ORr6S7youLJ4J4CYAm37c/ONz/3jlueVZGU4hpkk0EK40Jtz2KM7uedrfANwJYMGDsx+csq/aH7BbEbMQS9QgrDpJkAaF6WOmn5aZmnkTgGFgwZApTRza1wAWgck05yKREGDaCuqyDcymEEVibe8CZus80fb+49qewB3AnGQiAF4B8CXYZmnsrNipPfvPmcjNyq4RLaKu6yKBQCUKwyZAYAIZhWDoVK3ylu+cOWFm+TEc/3GHslSR7jv9Ppc9zZ5V9H6Rc9yN44BEBmrtht0bKvp26Nu0vpDHMYqiCLbOtqGagFRKyK9/vXXyL0fz879e983Z55x65r1gAjOHczhoAOYsXLLwmasuuKreErOUUlJUVCQBQLm1XJQEd6ZkRDN0UaSUih6Z6N6acE2HkZff1adH+655YMrv3pklc3+ZMGLsmoY+mFI6CsBdYNGsx1vmgZnJbgYzmMqXhkRZvTASkY5lANZHIpEvFixY8E2yY7Gl+M/yBaddN/TK+wDcHFYjla/Pf6332BFjm6XQU0oFAL3A1vl0MGFaAovqNANP9lbXel55/5N35zb18+Z/Mb/L8EHDJ7ocrhvA5tZ0sEfAMqh8ANaDGQfaAbgErIyQDYloUycSJTijAPatWLdqsygJqhpTU4aeeq4dAn755+J/zr/j0jvW1x3DpGmTUqZNmnYBWBbs+k17Nn3du33vQ0baTpo6qbcgSJcNOOX0QWCKhiP+czvY978FLHshGyx4wsz02g0W+f3hinUreloslr4en6+rpkfTLJLFbZUsGVarbD+731kuAJbtZTtRWrGrOis9ew2FvtIQjG/7d+zvBTl0dnB+fr546uUDBlggZlKLsCu6JbCpvijgJ19/cjCI2FGN0W+UUZMbVMDzJ+enTrj1wbPO7nvmNWC9pLqgaRUdlgOYvGzHsh+L3/ugb+e8diIFtXoDAcedV92R16NDt0ywe6pqZslsb9Dn84sW0R+KxLSu7buJd1x+czaAaQBOw9EJeNwDFuS1HezaM8ubNfa8k+fczBKMgl3zN4EZwkxaW58gDudkY8v2sl2zniqe8a+io6gvKq/PSLMJaj8wI/mPqxeu3tPU8ojHKy+99JLlkksuyerUqVMu2P4eenP+m3TowKGRru261lZUVATatm0bPNbjPJ4oUAoc3bp266SD5ICwvUgwDKqBRCWBqrohUlEUabWn0l3tq7ZedvZFwh+G/8HU8SUAT+HkdQxzmkcITDZuCl6Pz7P4y7XLPRbRIoNCpAIoobBJkiUlPSWNUEo1m2wPiYJYDUqrqEBqBINWGYKwJxoK7fY5fLuHdxnepP7piqII6ASr3bBbdKLbBFGwU4FaiU5kSqiVEskqGLpMIdg0Q7O6HC7r/TeOM3USN5jelIKEDpUHFuRoZhofrQDGIIBPPvjig2euH3b9ypY6aEFBgeWGO28YZrPYehoC7D/8svarB24a32CCTXFxsbghewNBJQRnxJkWBXKgU4laBY9mCVSHPeGMUZeP6tOtfbfOYNeMZ2bx7FKxAsvHj6+/mtJnq5deecGAYeMB9AWzJxyNfq4tidlWyrQnaGAB5RLY9REDaz9kVhLcGFJDK95d9r9v7mI9W1sUZY7S9oZL80f369pnLNg1ezohpNm2TUppbyTsCabOmAngHjD92AvWcmwOIaS0KZ/x5uLFzlsvvngigJFgssMGMD08BDbPEQCbwUoT54Bl4g4D09HNzGfT1iEB0APhQM1PW9dvFgXii0SjzqH9z3EDKP9q7VcLfzfgdwcEpsTbLp0Blk28e8ueLV/2aN/joE5tRVGES268pKNVsF00oOfp54FVfLTH56kUzJ6wGyzD2gJ2rfcE0Ans+ngNwLw1m9aka4Z2Wk3A2zUai+ZYLdZUm9XmNKjh1HXDfcGgYc49lXuMn7dt8Lttrq2p7tQvNV1b+cHbH5Q1Jjs4Pz9f7Hv5GT1kInUE1T3bd25fX1+rqydef6IXFYXT9Uj0p8cKHjvA5vLb8Sbk2yfeMbH3Wf3Puh6sh3NnsGvicHX6HQAmf7Tlo//O//DjHh3bdHAKVLd4QwHrnVeObNujfdccsOutdmbxCzVBf22NaBH9alTVu7Q7RbztspvsACaAZSAfjTLUfjCn9VfxzzPLujfFnqCD2RKiYPayP4AF85sc1/YE6dAvOaKYfeGO2wk8wTD7zpnCk8Mu2yt75XRffu/tBy+P0NK8s/SdrGBA7ScS0pNSWAxKV++p3rlGGak0SdhsrfSp7EO3bt0aHDRokBcAxt80HpTSMwAMB5DZPaf7d2AZPScV8Q2zWZGpjWXC9An23t1P6wqqd/MH/e7aQC112WwRMIGwCqyskQeJaEEv2CZTCyZQesEEhkFg9w7n5MDsnxoCiyDdiUS5n3K7O01u6I2EEAomXCL+c0/8kcymJ/HkpsMZ0AeffPBfTcQOXY91sNvsOdecf9WpYI7F9mAKXLKxQAe7dt1oHWXZROwvIKaARfEuXr726z3fb/ohwyE7bBAQAkUMhMRgGPscFtlz24jbWtz5CwA20SaAKQzldtn25MLlCw9aXroxEEKM4uLiLbsBkVj2yKfmnSNecOaZIpigbQM7bzUzNX1tc5zNe3x7oharZbs/4F/4ry//s9Emuz4nhqWKWoJRCVIElYja7XbJ7/I7qE4rLh58cWqWO+tiJAwn3viY9gKoLa/cG1ny/ZJQ25zcaqiIEZFEFyxfaDUI9QlEqFeG227ZrpUsLSmlEMJV+yp2jb1pbKPkiDJvdcQty5Xzv1pYGolGrISQUoPSnyGIpVYd5ZqoqbW+WmeuOzf7imFXbAO7tsWvfvxq19oda3+89/p7o5+s+kLVQgHfZWdd7InPayr2760b6JLXKdK+Tfvyj1cu2ueUnX7VUHV0alxp6JKSEr2kpOS7Q73u4ZEPfwdWTuyg9O3eNyXNmXoaWPS+E013vg4FMLWt0XbWiw/PWpj8xFNj/3HIN99Bbx4BZkw7WtVuzJKD74Hts5E1O9YIq3/ZLDSUAl3pq4ya9wal1NRjBDADiLne9caBBiuua3A4Lc9WsCAOM7vDNM67wYxOTiTKf1ZarFK4Q1rOkGfemu5wu9ywimLZ5r2bNz4x6omKIzVAZeQEL5hR6KTlzPPPbNepU6fLwIyb3wP49PZrbq8FmANhN3afiFUf8PKil9uLmngeiJBtgFZRIv74SWjBryUjmh8AEDfSbow/Dsrf5j05MNWZamYKR5Bo+8BpHZjBp62x0t+XYJWhzJ6ilSVL/r3r8rMvdTjtzsFgDpd2ONAhbDq9gmDXnD/+M5ruTm97zXlXZ8b/NnuRRgCEFq38JGoVpZgvHIwIFF4KeEFRSwXqZYVraFTa13QTctzGY35uo3qyT7hp/G+/L1q0SA4IAacuW9yU6k7RIDkQaAYMuCghbgG6O6rFbH8YdoNFtspmb1ULmN1bTPq9vh6tjUUCu3+jQ08dmtrEY9SLx+mRLh5ycT8wu1KVU7If9JocMWJE8lq2L/5IJjAN03YdzhhWr/n2iypfTZUR07o7bY60q8+7sj+YrasjmM5lttgBmD2hFuz6ay2O4uR2bilgbbMWLF+74pfvf1md6pSdTsAIANBBhQgE6rFL1prdQdsRydq+aOhFRr+ufXLB7slnS1aWHNb30RBFRUVbrD2totfrtcXtCQZYdqaZpakB+Ka8vLzJdnxbba3x3ifFewb0GbCkZ/vuO97++P3FVqtQJlEpooma6knxqB32dRC8dm8KiZDKC8++kGalZp0HtiYBzIm2HYnWfSG7bA/7ArVVkmgJigJR53+1MExBa9KdqfU6TMtyy+j7Sz6sEqGtqfBWVJ11/VmNkherPFUxp8VZM3/5wt3hmBoQKPYaAv0ZVNghCHpZJBrxh6Nhe7a7XfZ151+xFUw+osvXrKjZuPnnH0ePGF37+YrPXSrV/Jedc3Et2HWfAnbvO8DWkNp22e2i7bLbeQCUfbTi01qrKDTaXhS3J2wCqyrQII+MfOSQrwGAvv370vTU9NPBAgBSkAisPlw6A3igs9jN9n8PzXoz+Ymn7jm0PeE2etMgMJ38aPUgdoHtd4vBkgSCa3aswcHsCR6fR09HemDEiBF63J5gzlMKWLZ5e7B5OKHsCcc6A5g7gI8upsDVkLHfdEqoYIKgCuDHjds3zhrz5pgVy5RljS+v2Uxqamr6p6enP4VE3fqlv5b+WnhKx1OWH60xHAuKi4vF9j3bDzQIzgExMiyS7YchfQaddA7go0m8hNdIAGOR6MlKwQRoH4DydVvWLVVjMQ8RhQoYZC+oUCVa9ApDMKKDug2qjWdePo7jp2w0p3mUbi7d+nmNr6pUEq21BHQ7lehaEiPZhkRcoobNA/oM2HmsB7l83fJ0p+wcoBu0NyGkPSUkXTAdJgShaDRW3rFN+7Z52XnngAm9WY04rNm/VARTLgjY3lIL5jQMgu0jVrDSM03tSUwBfArgrbcWv7Xy1ktv3ZL0DJkwY4ItrIdTjJiUYbFI6emuNFkX9PDuzTt+/uez/zxoFktBQYEl9bS8TFGATSKaRRckAgA0BkOQosFwMOydMXFGGAA+/+Hz8x2So8PZ/c9+u4nnAQB45OVH2kRV2rnW702hEDUIeqS2tjZyzdDLbX+67E+5YAIyRVKvw2pfdVlWata3zfncxrJmy08PnNat32SwNWyTZmivrt6w+hPJIe0c1G3QAWWUDpeBBQWWZ0ffNnDYgHNzA5GA584Fdy5vjgF22B3DbNdfev0p424c1wXsGqz84PMPNl5/4fX1KrmUUrvH47H++uuvNNwmHB3WeZgaD8TY/7jKMGnO7UUD+3Tu0RdMgfYDqHnr4/c867b95E21O6q1mFatjFbqLTE9a9Ysebe9JlsyorpVtQbXt10fLBlRooOCKPMUeb1zfay+8/7o288GDz9t6MOyVb4QTS/XBLBoZm8kGvmPXbYXHs4b75v5SJuZ9z1+H1i5cysSSqMFiWxws6RlDInSjgaYgp9cXtgKNn8C2DUdBbuuVSTaqshgjqE9YA7gbQDWT102daMyvOFy7mPmjHFJEVt/VVOdk26fKHdt0xXxseaBGUL7ATjrcM6dw+E0mU8BXLFlyxahGtUy0e2ZhBhZAkEO1Y32hq6lDew1sJsoir8DkzFiYIFVAFs/Pv9m/TdPndXvrKXH6gROBmb8e27XQd1Pu5SAtCeg66KSZdkXJYv2Nbd/XWvmhf+8kTn2utsKwNp4WMH2n4mrV69+edCgQc0O6GssS5cutQ0bNmwsgNvAgtEEsD3VhYadUBrYvnZCOuaPIQ1l7rRmB/AthJC3i4uLxfz8fEoI+e2e/fanbztEafR8GOgGQtqSeG9TCgQAGgRBGICHgAR0kEqBGEEYiEBAmBgkYrVbQ1bBGkAQwdNOO+2ErQCwdOlSSe4uW4SIYLHCKguGYNU0TTRko8l2cEEVCAGxWu1W/6ldT22xAKaCggLLn+69/WyXxZYFgi1fb/v6l/GX15+pe7SglAqrN68eDCqeCoN2IAIyQOMBBwShSEyt6NimY2r7rLzBYFXIcnHoe0kDy8I0nZZmVEEArOWTD4l1MAvN60m8EUDRO5++s+zDFR9uKFFKfgscv0O5w+a0Op3UZk13CGKm1e5wUEINWRB/Uu5SDpoNzLI3+6bEQrEUIhJbsj1BREy16JZaZbziA4ClPywdZJNs/SxRy9vN2X8mvzQ5lRjWroJOMmr8NdQgRrQ26PNfee6V4i2X3JgLZncxezmrAFBeWV5z37L7VrRE4NOh2LDz14t6d+zxDFglqXIAbwFY+PP27b+c2rVri9wnq35a1X9IvyHda9VgQHnxL9/OnDDzgHZrjUZRhBmn5nS+//p7+oAFDlSVLCvZOGL4iL31vXzz5s1y9+7dHQCMj7ZsiVzeo0eD9+b6nZv79OnYfRDYdxIEUPvO4uLqtZvXeR1OV40tRqqnjJ5Sr42luLhY/L5iQxsqwHBGEUE7hJQRShQAlNcVW1m0TC8aXXTAdfTZN59lDj1t6D9kWf4DGmfXa4i9ALxqTF321Q9fKReedWGjv7t4BbjrwMqC25GwJyT3KZbArlOz9ZtpV0i2JyD+uhQwWwRFooS7WeLdfI07/v8SsCz1X6cWTV3TkL0GABRFkapTfKeqWiRtyi0PpnTJ62J+bhaYLaEvWDut5thlWh3H2gHMOXrEorHoT76gf6MgCGZT8f2gACWEqJTSSoDsEUB/3LR708pz+p5z1EsQ3/3k/Z1fnDLjGbBsFiuYEfYpQsj/HeWhkIKCAinsDlsjrggJVLeNfTR7dt2FqV4URRF2hXY5Y46YPYaYJEUlahhGJLY15jvZSo+1ZqYXT8+47ZLbbhGIeF96SpppsCYAoOv6T7sqyx/qmtvhoE4YSunjAKaAbUqmURxgG5IZaco5/tEBVHgCniemvDOlqD7B63ikyl/VW6DSLekpqVeARWwmO39M4SwWioS8oUh4FRGEVQKBA8Cl1EA2BLoPFD9RIqwRCbZDQ60GpIEYlztk2+UOm6MNEveBGWFnGmBo0meYRg1TSDSzI7wAXgCwID6+HLBovHQwQ7L5v9JJsydNeWb8M1sPdr7jZinuWeMKh4JlW+YiEdmngjnQKgCsm/PBm5X3rrvdAwVNMpDm5+eLgbYB51/u+kvHc/qfcwmAa8F6vBpgTvS98fH3iL9Fi88DjcaiRigSeifdnT6qKZ99uGzcvnFKr869HgRTUj7xh/wv3D/1/mWvPf1ao6LzD8XO8p19OrbtOAOsHNFWAKNGPzF6k7/GH7NYLTQmx4gGhxGBGFmgFIVxiD12evHsU++55q7JITX8O1DoIPDaLPKcJeuXvF23/2/caJa9YfcG19i/T/HaZS26T+0QXl2UuH/j35X0yl9f6ZOXnTcNwDDd0FWvv7aWEAQddsdui2BZr0NfsX7X1pUDuvY5MMCDglDQHLD+3RJYtHMp2L7QASwgovbdz9/98eYLbz5AkSr+uDjjgiEX3Ga1Wm91OVzdkHC6Hgrz3okEQoFJex17X+9BGlZIDwalVPQEPL11jWSJArWDQAKF2wDpAkpTQOAilIRB4COUqpSQCKE0QkE9lAoaABBiiAQkCwS9KaWyRjW/w+byuGwOL5hhx1T0XJFopL0v5OspEUsHEBqjlCyZ97/X3n7wTw82GEATi8WGUtCnKGgXq2R1oP7KG2YvsAjia43H7zUMaoBSGrLLNsNpc6aBrTGmAV4HoOmGrnp9tbVEQC0gSAbV3Q7Z7nLYHOaaaMoI5vpoOrSFpM+muqEbXr83REACqa5UvyiKeWD3F0HCKU7rHDP52ABg6IYe8/g9YQBIT0mXRUE0s1gAQPP4PV6DUoOAHHYwLaUGtUpWMcWZYpZXNM/BiI8x5PF7/QY1QgREB2ABgR0UMuq9RykoBU1LSU0RBTET+2dhcI5fzADhGBK9r8T4Y0Otqt6QZrNtO9gBVFV90mq13gUmC5j3jBEKh1YsXP7xczdecsNRqfrDaRy3PnirU7NqLmqlog6bIUHVvNVZ/o9mN653cn5+vmjrZLNFXBHihFMLrg/Gjrbu+8K/Xug79oaxjwC4HHE5NhwOT3Q4HO8ezXGYVPmrehNDvBiUtgNIJiE0kzJ5u66MSQyq+x2yw+2wOfojkUnFaR6t2clbH2aw3bWEkMUHe+Ew5Q6bvbqCuva6tKT7jOTn5wvp6elCqVwqSJmSCAB+ZBrADu1oJnZwTg58Pl9WjOq3ZrjTrgSrxONAQu835eUYgFg0Gv3BFwp8KgpEpcCVIMgDRQiUbCSg3xGRbIQGHxWp0zCMc+2y/UqHzdETbM005eDk7Eaa9BmmjEHir0nO4HsVwPNguncKmA7hBJCjU72rSMQ2YPfeREJIg6W3AeAORbEVPfJIL4vFYmY7mv1OzRLTewGs/b8P/q/slY9f8awuWt0ku5GiKMKKwAp74c2FWeeccc7vAOQDODM+/hqwANoUMKcrQcKpRqOxKIKR4LJIIHJDXl7eIfXr5vL1z6tuGNjj9Edlq3wGWKupaQA+J4SUtcTxV21e5R7cdfBzgiDcBTbHj97z+D3/q/XUqharhYYhCpIcoQKE6NvK234c4nxnvjOzzegbRheEIuF7wOxAEZtVfnv5d8tfvfT8S+u2KiGvFL+S/uf8P2cEg0H/vc/eq+7YsSOybN6y3yqUKooirMd66en7nnZ0Tuv8HIDbdUOPev21IUJQ5ZAdVRbJsskwjO8opStlWV5X37gopXawRDg72HdcBuZEzgLLxI+8+dmba26/6PbSuue4aNEiecg5Q66WLFKB2+EeAHZ9N6biiLknqACeCYfDrzgcjnrb2TUGr9fbxRCM9qBI0QmRREqdlNB21CDZIHARUI0SEiaUhCjgFShV69gTCBUEF0B7gSLVMAzNbrNXu2yOyvhcaPGHFIlGOvpD/lMEQcokgBWgG19f8HrRg7c8uKGh8UUike6CIDxOBTrAKlpT0XAilw8sAeYAe4JTdmh2mz0FCR36t/tPN/SY1+8NEkL2AYJoUD3VIdudDpsj2RZq6v7m2mXy27rG7Am1USLAY1DD77a7c60Wq1nWWwcQ9Qa8hs1qJzarbB6vrj3B1OPCTXEA86zd45NvPv9h2T/+MXvqZ9np2Q1+d5WpTmqvrqCuTBetRKWxTFlm9k84qiiKIhQWFjrBFrhMAL5la5btGH7G8KZH+DQSSqmZvWL44EuxaJZeAhX6G4bhEiCsmfjqxFVzx849ZImQQCDQRrSIoyno9QSkJ4CoQIQFIT30l+enPV/aUNQ1pdQdiUTSY7ZY0E3cVS18epwDIQMLCqSueZL8zynTc2VZTgX7/n2b9mwqf2zCY96DGS3W7l3r7N+mfyGY0X8jmNG5DOy+6QJWwqcvuBP4ROCXqB59dNw/xn1UX3+O4xVTWC0uLHaA9SM7C6zkiZm9twvAhlfmv7Lu7Q/eru1p7al78jwEtRAjqRFiq7XRgBYwOqgdDI/H89u6FmgbkK665CrHPVfc0xPA6QC6xR+pSPT7DIIJVnvBHL1RMIWxV3wcpjAWAFNwNoD1rV0Xf1TEj5UBgI6fPb589vhDGCiZoy4VLFuwK5jzWAYTeF0AxgOQY1rsS83QitbsWzP/nA7nhA9nTimlkqqqXQwYo6wW6/WiIJq9Ts1sDgcSvUp1sDVjJ1gfHd+yNctiT7/2dPij2R8dlajv9evXW/v06fM8gLsBgIIGotHonMkvTp7x/P3PNztiN977eCiYE/xcAB3VmLqHgtaCQgOFjRCyzx/0f3Bb4W3/PtR5K4oiLMMOqzWgi7LLSwEgtyw3VlR0YFDGx98u6XvJ4OEPGNT4oxpVAwKELw1ivP/onEcXzJg4I0wplVVV7UQI6S1J0hWCIOwCMH9D5YZtE56eQGWXTM1rPJwZ1g8mF+UX54tvXvVmR5vNNggsq968lq9GojzfOELInHreTgYWDJQuGXxJxuN3PX41gFEABh9iajUwBfgXAIsefeXRN54Y9cS+hsbXGBRFEdavX08q+1YSAOhZ1pN48jwkUB34TXZ0ZbooAKSXpVMA+DXv1/0+r2dZT1IqlwoAsHPvTnrfhffRgoICM9jBBXbf/1JSUrL39eWvSy7JxQyyqdBLlJLYwcafn58voj2sWXb/UgAAGZxJREFUtWKt8OLEFy/pmtv1cbA5TmYjWFWOxQCsoVAIdzzzkK82sIWiArj2xmut91xxTy8AQ8CU6RDYPbhx9+7dm8f8fUwEeexAZWXA7dfeKI277E82sHXCXL/sYPduNdj6lAG2pkUAhLfv2x65+5m7A7JPpnP/Ope2b9/+FDCDjR2snOM3YGuOHYnedWb5XLMiQNWW0i07xs4auxcA5jwwx9G9bfdsxLMrVFXdfutTE/dGykoNc7yHRRkwcOBAFBYUymDGuuz4mKoRb4Mxeupoo7ysHDanjUZSI4fW/cqAmY/NbN+1XdeHAdwOri+eCNSAXa8/g2V0ZIJVzOkAwKOq6hu3PnXr4uSsmros2rxIvqz7ZW3A1kWA3TO75y2b5180d9FRdw6ejFBKneFwON0wDM3pdHoJIQ22VYpGo6N0qt8P9n35QfAzMcj0p+Y/9bmZhdIQiqII9957b67L7brSMAy3SMRfKaUbZFnei3j7k4N9dlP4nn5vGUT2z6qKB3+1AbMlAMCeoqKivaNHjz4mwZuKoghlZWViqVwqhDPbEADIrg3Wuz5Weipp/rW3ZY+5ZuRdAB5EwrFQl+O6Fx3nACJg94gIFkC4GkAhIWRLQ2/QqHYlKKYQEDcB2UMp3QgBXhi/9cm1ALARQhwAopTSMghY7wtFvrnumSt+4o5gTgtC8pV8S3FhsQiWCXwmWOloO9h1XQFWxnbNypUrK++aMUMfmp5OPU6PZMqXfmQaPcuserI9YT0gTrnrKsutF9/aEUwv6gJmT8gBk5kFxDMswWwKVWAyhgPMnnEWmMxi2jW2g9kTfo4/1ixcvXDXki+X0OkTpmcAyJg6d+p2ZaxySHtvvpJvffuRt0+3WCw9wWRoB9iabAdwM4AOMS22LqbHijbu3PivQacMOmzbbjAYzCUiucVisdwlCZIfwEdIBLMYYDoJic+BB6yy0iYAlZ+t/izy2NuPRVfOWHlYdoymMkwZJk2+5JHxl5510d/AdBkVwLJJsyeNPVSAfiMhn37/Rb8LB55/HYALAHSOxCKsaiNFDBQusD7DS+98/s6nFygLDmWvI/lKvqU2YLOY9gQbbFp9uujHX36ce9G5F90tCMIYCiqrMXW1YZB/6XL0PTdxVwNAOBzuSAjpZbFYrhIEIQDg4x07dqwdPWd0LNme0EHtYOTl5ekNVmGhIH7QbBezI3cBu65OAbOjpAMgBozpC79eOPWaodfUDdYnw5Rh4lk5Z6U8ec+T5wG4CywA/2BOYAqm95UB+ALA81OnTt3ZnCoxde0JAJCNbCHZngAwm0Jj7QlKvqLn5+eng+n9uWBJgtuWLVtWNnbu2GhO3zOF7NogCWgBY0jmkNjBxm/aklLKqoUZf5vRtVubbi+C2aqS8QP4K4C3UY894ZZbbsGtF9/aBcy2lQE2x7sB/LK1bOuOMTPG1MgumQLMnnDfDfnk1otvtYLZQuzxn2b5ai/Y/WIBsxdSAOGtFVv9Y54dE5RdMq2qraJ/v+nvHS4484IhYOvfDgArbnv2Id8fz/u9eNmQy1LA7BrpSFRaQ/zYpQB2E0rpNLCU6VMA9EGiLBPAlLyV8ZNoB2bA7YqGBU3TkGlG+ZiROYfL1/EB9gaLZDkYjXVIm6UVW0Ovw2TCYIaqr8E2yssO/nIAbNFfBnah5IFtrL3+v71zj46quvf4d+9z5j2TTN4P3lgiAgICaiVVoaiXQtGLNbEPdGm1oaKgsERbe9fisFatihYsSi1ce3FhubahgkqMYBWsChoFASmggolAHoQkJDOTeZ5z9u/+sWcuETFACBDo+aw1a2atnHNyzjz22fv3+H4hb3DHkwqq/vPrL/zmz28ve/VsDf7diaZpKgCR+gGHQqGcmNBvMA392rzM3JGQA+Km6sbaZ+/60217ujqRffTFRQVzSn95t9PuvAvyu9KCpPwj5I20FkDV/GXzP+lMTgAAtKWae17ZvDGQg3Z/JD/n9vb2LY8sf2Tv8RIUhw8f9ubk5AyG/EzzALQ3tDRsK8wuPCUfUIvTQ9M0vmvILnayMikl5SVKVm3vfIWYhxt6RLErpm7TEwDAyONoajnkvaR3kX/eXb8pBvBfkDcHi/OHlB/1miPtR9769e9//dWFlPw9lpLyEqVXXS8fMXLoCTuz2RPEiMX9AX9E0zoP+nV2zPxD+R497nDabQmnTorKSFbgE4PgJjdtipkwFdOIJ+zEiXGFkUsh3QcGh+AKE0IwKEwHsXY7o7CpmOGsI1ntXZ6YEtiDTz3oNhXTIbiwMWK8PUIiK9vveLxMK4ZcWIYBfNTQ0LCtsLDwpD7zR5cvGPnAT+69z+1wD4H8rRdBzk/qWkItv5n77NxKr9cLM+ZUAEAwEoKRcNgTCQDxEyavzyDb92wvGjF4xA8gZW9CAF6aP3/+jq5+7scyc/FMBxfcn4gn/L60zPQnfvnbXMh7XTbkXPErAJtLS0sPdmcyYIo2xX3ntdMHTh03eSqkBKMbgO9I6Eg0kUgk8rPyOeQk3A5gySubX1k2dezUarCuJVE1TVPb0tu8AFztgXZlxLAR3vt+dN9AyO9CXcUHFZunjJ3SaUXtzMUz00KBRN6Ts357edKbeWTy/Joh5yPbAXyyY9+O5t+v/L3ud/ujqqq2LpqzqBXnoGivM6obq/N6+Xtdbbfbh0MGK1TIhGsIwGfrP1hfNXHsxC4pzUwpm+Kec9ecIeOuGDcEciGoADg8//nffbS1bv++tZ2M1amxzlRMm2qoZtwRTzTlNEVP5t6vaRoHwHcN2UVf257Avu17o2kab8ls8Sqmwk3FjB77W9c0jdcX1CuJhkLFXlCf6lDSz5bSREl5ieLZPdTmy2yhrCNZnS6aT4btn2/vNaJoxGUApkJ24OV/y6YdpcMtehZrAbz4wc4PPlu2elnI6cmOOFUjYSqmTTdUO2NwOEAiHosHnvv1c204OXUkFQC0eZrZ1THW4tR5/7P3fcUXF4+AjBdEARyKxWJfrlixou54CdFdNbvyh/QfMhIygJ8BGXPYC2A9Y+xE/oWMiHIBXAtgOOR9PgcyWOUFkE5EX770Zvkffjbxx6929Zp27dplzy7I/nluRu7tAPxNrU0HGVM+BBNrl7y55NNUorqkvEQBgLMhf5mCiNjxbCZOlQV/XXzR3FtnzgRwD44f42mFLI78GLKIkCALNG7H12N6x+MrAKsh409jcNTWpadAkAnR7lKSaAOwOXnMIfhm4djJ0DHWCchz/DaZ7mbIDriUR3SqIDx1PTHI4r09yW2DAD7c9sW2Awv/9iz87ow4MxPtcX+8sbN5wOyFszMVrvQWXFXIoIRiMyMJUzHtiqmYuqowO+OMwEEJDmYXwqCEajcjFKHQU3OfiqCHzRktLhweeuIhX5ALFyfGbfYEccH11mB65AVN63IB0IwlM7xG1OV0mAkncbIJxaYAMp5gY6aREIoJU9EFI8GJcc6FQ8YTbA5ipAghGFOYCcHbTUZhJ6NwxB0Jd/yNaZrGT2UOPHvhbBcxcpiKaeOCcz2hswxPhu23M347BLLYnAHYeiBw4KN+/n6tJ3PMx1Y+NnDWzbPudDvdEyCTOH0g758JAI8DePaRZx5Ba7yVOVUZU4iYiu5WTIMRi6esrM4FGz/amD/u8nETIRPvDMC6hxc8/NaChxd0i6rYOE1Th2Y3pVOIMvw+f9qj9z6aDhk/z4HM9RwB8On4+eO3dWeBS4lWYr9twm35U743ZSKAhyHXs+mQ86PUd9oFmfh+Y80/K55c9/naLV1dx6XWjXrc4UyEj6ijh4x2zyiZ0RdSTa6t4oOKqhWLVuztLGZyh3aHU1E9eY/P1IZlp2WnPhMf5Bq8HrKZ4uMd+3YcfPKlpw2/JzNOphLMjXh6nEXI8jXL/T/54U+udKiOyyDfYzuOWs/VbNix4b0JIyd0tWOZ/WPrPwdfN+qa4ZD5Tg6ZC/pk5RsrP5s2aVqws51nLp6ZphqqGhac+00l7o66o5r27XZW/w+BafM15RvxhBMwY8kMLwXJ5nQ4Y9/4rRNY2bIytbChkNUX1KsA0NrQaqSKdNmiFxcVQIWDoGaTELng5APBxjgzINCmcNQaZAQYsTRiSj4YZQJwMYKNwE3OZCUngUxGzACDEEIwgwxKd6bz6Tff7YEM7uUmH9k4GmhzQma5A5B+m9UAql/e+OqXW3dVBSZfM7moeHjxDyCrTz3Jhz/58OLkWtkPAKiIRqPv/KH8WWF32NVQOKjcPmmad0DBgCLIIK89eew8dG0y2JEmyAVSHeSkPAYZkPJCBh2DNYf2f778tRfqBIQuBI8SmQ2BQHP19d+d3GvquMkzANycfK8Y5I+yJvleNQHYsXrD6g07DxyodmUmTETcPpupZ8WFmXP/LfdmuFyu2wDcdMw50YFDB27tV9Bv1elc2KI1i/zTxk+7NTs9OwtAJWNs++kcr6usWL/CE4/RRVyh/tFIJF83dRtT+EGPw1lVt62uqauD1c+feMh3edGg0ZFodCQHmQCi4CwqTGplnB+GorfFdWfLJ69sPKGEc1lZmW3wdYNzTdjsqm4ww3S293NmtZSWln7rfuXl5fZGszFbV3Q3EjYXUw0jEAg0adM1qwv4AoCIpgF4BseXqzybpORCe1oxTE+gGbLw6RDkvWPvyxtfqdm9/7OaLE/anntL7z1hJajFhcHj5UvT3Yjbo45obEt8QGRVJ2N3R2YsmJE//DuXXRmJh7MpKTPHiREgmptbm7c+eu+jB8/smZ8eS8qXeBN6IpdsFJ9dMru+OwKYnbH4L4vTTDI9AJBIS7Q/fNPD3bI4PB6Lli/yCze/jBPLCIYCedOn/sKfl5WXUnyIAjj88jsvr79l/C1npOhq6dql7ulTpp9S8YimaTxjUMZFJmf5DKZCQokIxoJK3Dg0+87ZZ1wRpTv4S+Vf0kKxUN9oTM8iLv2oFAhTmJxxmxpoA9VppzG2JovnhkMuiHsBaPj080/XjRg8oqabLuGcsmbjGn/vvP6XHwk3DwuHwzCFaAGxJpvKahPZic9Lh5Z22jF9rlnw1wUXeR3+onv+8xf5kB3ggyADWXmQARvL47LnshbALMbYV+f6RCxOD03T7Jnfycw1wDKYahggRP1Of1ulXhnqLOj02Mo/ZnjI8JjMtHNwhRFrnDVtVqeBMADQyjW7GzmZDmFkm4JlgVEmGPwgOMDgcNhcgdrm+g8fm651+X5bXl6uhJ3hURE9PlzXdYfP42sXJGoNpny+IVpx6GwmfFM8t/q53Fsm3Pr97LSMQas2rNlUOuHmDadzvF8unN3rudkLn4Xs+ulINYCVf1r939sC8WCTojrqDF1pcybipGamue+78ecjAVwP2TnEIJs9xiDpEQvg/Y93f/zMC++8UJnGcnNVhr4EkWEK03nj1VN8V1165QDIjrmUbGAs+dqLo9Yr/ZLH7SoBSEuQlF1DYzgW/uKZvy05YLc7GDji7eF2Y8KY7/crHn7VFMjOvxN58RFk/C0EGRhuS76O1NTVbFpR+dLbnjSvkYjHch649b4it8M9DDIB7sfRppVUgVqqCaAJQNPf31kT+Kxmb9zrdgkhBAMAzjlBwAEOLiAUTlwVTBgMLMGIhRgTh4moyVBUphIKSYjcZCcuiCgCsGZBrElVzQgMxB/46QPd5iVrYWFx7nni1Sd8PJDmUs1YIrA/0H5SSSEA9zx2T8aIwaNHRaPhAeDgRGQyYow42hXgX/f/+P5/nelzPx205cud6c62fAAIKIH6EymHnC5L1y51x6NxTzxmYyI9GI1ui4bPVAJzceVihx6iscxk3mCkLe+2ST/LHlgwMGUrFAFwZPXG1R8+v+b5LWdCyW1h+ULX7JLZsVON0Txd/nRfIqUPTDigIE46gqZQG+fefs/h7j7HM8GDKx709PcW9dL1eA5MQzDGhIBiEiPVzlnYCBsHTyc2QkR2yOKwkZBznBiAN1etWrW7sxzO+UL55nJXni1v8Fmr8lu7Za2bx3mOYbBMgnApnOyMmMPkSCiEoIBouvHqG79RUVq5sbK3YTcKYMINrrpJiHTOyQ/BfQRyEWPpnMguGH3tWmTAFa3E2F5ixts3fe+mb+jOv/r+qz4IDFCYYgODOxSL5H3/smuvys3MHQ6ZgE21Xnck5SOg42jy+lBcjze+vumNQ6qi1nOgmhGrjzO1zaMirsd1zu3cQwa5yUbBYzs/nv7fp/PaYuFe40df2/ua4cUTAdyJo14FVY2tjYvf3fbuPpvT2zK1eFKn0gkV71WMFsBEBpYjIFQObgjA9Hg8f79u1LgPjt1e0zSeeWmvQk6ilyIEGZwJRQgyVKm9rhgmA4B4Qpj33Hp3tlN1Xv5Vw0F96+6P3r7luls+BQBtueaf86M5is/nCzDGLBmZf1P+uPKPGczN0smkNJfLdfiOSXc0nunkQU9m0YuLCmwe17DrR40vKupXNAhSpmTYuT6vf0MSkMmdWPJ1O2RAoD35CL5Z9Y9AOBZpUVVbIwQOgbNGVUftpPGTas/daVtYWFhYnIiK9yoyBBOFTLB8YjyXkYj60/y7X6x6seZ89mkvKS9RVpWuMonIte7Dt66c+N3rhkEG28OQVdufv/POO1+MHz8+jh6cAO5IZWWlI+HFRYxTLwjKYyTyDSGyJhVP9DtsjjTI6/NCVtSnZLFcycfJFP1adC86gMr6w/WbX9v0ep3XnbYnkh3YOX3MuZHQ7QmsWL/CEwwF+zPB4sIhIi1pLYe18ScX0LW48FhSvsRrwnTBi+CsSbMSv/uf32VPmzytuE9un2EAmp9/bcXmcDgMxc7tjDFBJnSVC1UIQVBgg4CNGAXaW9prfzX9V4Fjj3/3o3fn3Xj11J8yIEcwkQYAHDxMwPaYEn6ldGzpt3Z5rdu8LvNIpL33qEHDfBf3vXgKZMdSio++rP3yz3998++7vT5nE9mocfbUo4HTyspKRzwdvRXDEALCsDN7zDRN4nbuMWHmwlQKI/FI3/Gjrumbm5lbgKNNHg4ctbtI2ZykYJAFyGHI5oZ311X9oyYajQUVmxJTGZomF0/ef7xrefXdymIGMQpAX2L0jY5gDm4QRBTgASIKAAhxRmESSoAxs90kHn1//+7qp26fG+643+qq1VmqoQ4UgqczMBUAFEZhIURYYUq7MMSRKeOnWIX4FhYWFhYWFzCVH1amkU75JsxckJLHuFBJ0N6KPZ98tuwE6q89mZSiARE53qh646KeJPPSY9i1d9cQxlgRMXITOngkEyfisDGINAKPQaCdM6rjCb7nkksuaTmlf0Jg9Q31LtjRF0zppzBcFI1HB4aj4d5E/z+BBgF7N2z955L7S2ds7daLTJL0xymGTE4RZEI7tQBIx9FJfBQy4FTVsRI86ZdbDCm5UBsKhaoXLlzYeq4lAzRNU5uy4+lOJLym7kg43Gak+q3qdstjqvsp37jRWzJuXB9IGfk8AHZd19+32Wzb/50TwJt2bBo2qM+gHwYjoQmc8d4DCvubkAnHE70nFIlHzOraajDGT7Bpl+goW9XtmKaAz+NhAwoHqJBdxqmLIHzd4F6FHOecHbZTcdS0HsltUx3LOmQwIVV8kzjmWiiSiFD1wWoTjAsGFgQoyIAACK1gCIEQJrAmxqnOgHLYHqfmUx67LSwsLCwszjAbd3zYe9zwKwt3HtjbPLxfUTUAlFO5MrB6tBetrZExY8ZcUEm4ciLl4n2fFqhQcxhnBYJEDnGWwwX8BKQzBr9IJoV103D0z+vDM9IyUvOF1LMJWajrgCziTfkoqR22U3B0LkLJfVLzCiP5nPpbx+3N5N/N1mCr2N94EDZFPRtvTbeimwZyM3N4YVbByUww7fXNDe5gOBjJ9GV+ShDr9Ij+Wp8+fc47O6HuIhgMZvt8vhsgv4txAF9s27dt35yVc1otL83uZ+bimQ57wu4jF7lEwmmoRiL41Nynwife88xSppW5J99wc+GNV/3HIMjxZkvpqtKGVNdxTU2Ns3///pdDdpdmQxa3xCCVhuKQY0seZOfp3kOHDr1VUFBwRjrty5aW2WZef/+tjNg9ACXHNhZwOpz1Xrd3vxB0kJE4SApVr121tuFUPZKJiO/8ameRKtSBJsEHRhkAAMbCTEAHk92yDIwJYqbC0GIyc+elAy+1ul0tLCwsLCwsLM4QVVVVWVdccUWffQf26Y8sf2SvlQC2ABF9B8CVkEGOGgD7IJO/qYQeIKs1qwHsYYy1ddhXAXALZKu8DmBbA7C+kLEozmFHQsV7FRmTvzf5WkjfhcMAds59au6WnrBovNAgolEAboQMssUAfLJo1aLNc0rndMnT70JE0zR13rx5Ppz4N8EgE5uR8zl5XlJeopSXlPshK8JdkIEOA0e7cAHpj9obUp6sN2RwxJbcPiXDpUMWpcQhZZkbk88Hk8+poK8OwNy9e7cxdOhQS6bZwsLCwuK85vVNr18zaeykaQBaQ6HQk2lpaS04Tzp9zwZbtmyxjR49OpXoTSV7Q5CWPv0g5xXZkN7DKZ9xB6SEqAk5H9GT+zRCFrk2AaiFlHAzIQvUvMnXIcgC2SBj7Jx5tXcHWrlmn1cyz4ujBXnfBp+/an77mZbuO58oW1pmW1q2dBCAcZAS5jYA23bX7n5zaJ+h1rqnG9E0jT/00EO9XC7XWABFkHK8m86VBVVHiGgIZPF8X8jx443py6Z/kVKdSH5PUsXRhZBrm1Tn617IceViSL/e/du/2v7JZQMuOy9sHSwsLCwsLCwsLHo+FZvWD5s89oafQq6PX/o/j90Pau6C4bkAAAAASUVORK5CYII=" />
            </defs>
        </svg>

    </header>
</body>

</html>
<?php /**PATH C:\Users\koboy\Bubble_Tea\bubble_tea\resources\views////dashboard.blade.php ENDPATH**/ ?>