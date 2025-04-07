<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");
header("Access-Control-Allow-Methods: GET");

$products = [
    [
        "id" => 1,
        "name" => "White Choclate",
        "category" => "Sweets",
        "image_url" => "https://www.alphafoodie.com/wp-content/uploads/2020/06/white-chocolate-bar.jpeg",
        "varieties" => [
            ["id" => 101, "name" => "Small", "price" => 50],
            ["id" => 102, "name" => "Medium", "price" => 100],
            ["id" => 103, "name" => "Large", "price" => 150]
        ]
    ],
    [
        "id" => 2,
        "name" => "T-Shirt",
        "category" => "Clothing",
        "image_url" => "https://plus.unsplash.com/premium_photo-1718913936342-eaafff98834b?q=80&w=1472&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
        "varieties" => [
            ["id" => 201, "name" => "Small", "price" => 300],
            ["id" => 202, "name" => "Medium", "price" => 350],
            ["id" => 203, "name" => "Large", "price" => 400]
        ]
    ],
    [
        "id" => 3,
        "name" => "Coca cola",
        "category" => "Beverages",
        "image_url" => "https://upload.wikimedia.org/wikipedia/commons/2/27/Coca_Cola_Flasche_-_Original_Taste.jpg",
        "varieties" => [
            ["id" => 301, "name" => "Small", "price" => 30],
            ["id" => 302, "name" => "Medium", "price" => 60],
            ["id" => 303, "name" => "Large", "price" => 90]
        ]
    ],
    [
        "id" => 4,
        "name" => "Doritos",
        "category" => "Snacks",
        "image_url" => "https://imgs.search.brave.com/E4hrWdgTkAlEu4WyIqFJS5ec9Mkp5DkF4He95HgQTNY/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly9hc3Nl/dHMuc3RpY2twbmcu/Y29tL2ltYWdlcy81/ODcxOGE0YTdiN2Y2/MTAzZTM1YzZjZTQu/cG5n",
        "varieties" => [
            ["id" => 401, "name" => "Salted", "price" => 20],
            ["id" => 402, "name" => "Masala", "price" => 25],
            ["id" => 403, "name" => "Cheese", "price" => 30]
        ]
    ],
    [
        "id" => 5,
        "name" => "Smartphone Case",
        "category" => "Accessories",
        "image_url" => "https://images.unsplash.com/photo-1535157412991-2ef801c1748b?q=80&w=1480&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
        "varieties" => [
            ["id" => 501, "name" => "Black", "price" => 199],
            ["id" => 502, "name" => "Red", "price" => 199],
            ["id" => 503, "name" => "Transparent", "price" => 149]
        ]
    ],
    [
        "id" => 6,
        "name" => "Bluetooth Earbuds",
        "category" => "Electronics",
        "image_url" => "https://media.gettyimages.com/id/1347675399/photo/trendy-wireless-white-headphones-on-red-background.webp?s=1024x1024&w=gi&k=20&c=4VmNrR1PPbXIIikJyXKDBG8eDz2AyZV14SasbmS4zWI=",
        "varieties" => [
            ["id" => 601, "name" => "Standard", "price" => 1299],
            ["id" => 602, "name" => "Noise Cancelling", "price" => 1799]
        ]
    ],
    [
        "id" => 7,
        "name" => "Sunglasses",
        "category" => "Accessories",
        "image_url" => "https://media.istockphoto.com/id/1417602445/photo/sunglasses-in-golden-bright-color-in-transparent-plastic-eyewear-top-view-with-shadow-trendy.jpg?s=612x612&w=0&k=20&c=Y4yhFCE_tBZfM9qzQ7A7s8prDbEXnVrTa1xcmIHo1Co=",
        "varieties" => [
            ["id" => 701, "name" => "Black", "price" => 249],
            ["id" => 702, "name" => "Brown", "price" => 249],
            ["id" => 703, "name" => "Mirrored", "price" => 299]
        ]
    ],
    [
        "id" => 8,
        "name" => "Notebook",
        "category" => "Stationery",
        "image_url" => "https://imgs.search.brave.com/bURy29s0BSE-6d7QHliyexCl9OnUgdFjTYCH6juEBzI/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly93d3cu/Z3JhcGhpY2ltYWdl/LmNvbS9jZG4vc2hv/cC9wcm9kdWN0cy9N/TkItUFBSLUxJTS0y/LmpwZz9jcm9wPWNl/bnRlciZoZWlnaHQ9/OTAwJnY9MTYwOTE3/NDE4OSZ3aWR0aD05/MDA",
        "varieties" => [
            ["id" => 801, "name" => "A5", "price" => 80],
            ["id" => 802, "name" => "A4", "price" => 120],
            ["id" => 803, "name" => "Pocket", "price" => 50]
        ]
    ],
    [
        "id" => 9,
        "name" => "Pillow",
        "category" => "Home Decor",
        "image_url" => "https://imgs.search.brave.com/k6TKexTdzWkO8OaiNdVZG9FCJJs2JiYNuGy84UIvj7Y/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly9tZWRp/YS5pc3RvY2twaG90/by5jb20vaWQvOTMx/ODIxMjAvcGhvdG8v/cGlsbG93LmpwZz9z/PTYxMng2MTImdz0w/Jms9MjAmYz1wZmcx/SEdma3k3SWpLeU5r/aVh1dEZPNkY4MDBu/VjB3bzVZOWZLSW9I/YWdvPQ",
        "varieties" => [
            ["id" => 901, "name" => "Feather", "price" => 450],
            ["id" => 902, "name" => "Foam", "price" => 350],
            ["id" => 903, "name" => "Memory Foam", "price" => 550]
        ]
    ],
    [
        "id" => 10,
        "name" => "Water Bottle",
        "category" => "Lifestyle",
        "image_url" => "https://imgs.search.brave.com/5OKj5VfBwLtKta_pc8jj-NnHeBvOkGX28YXvkdrfHi0/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9jZG4u/dGhld2lyZWN1dHRl/ci5jb20vd3AtY29u/dGVudC9tZWRpYS8y/MDIwLzEwL3dhdGVy/Ym90dGxlcy0yMDQ4/cHgtMDEyMjYuanBn/P2F1dG89d2VicCZx/dWFsaXR5PTc1Jndp/ZHRoPTEwMjQ",
        "varieties" => [
            ["id" => 1001, "name" => "500ml", "price" => 100],
            ["id" => 1002, "name" => "750ml", "price" => 130],
            ["id" => 1003, "name" => "1L", "price" => 160]
        ]
    ],
    [
        "id" => 11,
        "name" => "Baseball Cap",
        "category" => "Clothing",
        "image_url" => "https://imgs.search.brave.com/grwuy61opIc9ijNgB8j_i3ePBDinW2b-lURbQ3cibKo/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9tZWRp/YS5pc3RvY2twaG90/by5jb20vaWQvMTE4/MzU4MTIwL3Bob3Rv/L3JlZC1iYXNlYmFs/bC1jYXAuanBnP3M9/NjEyeDYxMiZ3PTAm/az0yMCZjPUw4VXlN/ZWpwekJlOFRmck9k/WHhFZ19MQ2hDWGsx/c09FQnVjWjhxbmJq/a3c9",
        "varieties" => [
            ["id" => 1101, "name" => "Black", "price" => 150],
            ["id" => 1102, "name" => "Navy", "price" => 150],
            ["id" => 1103, "name" => "White", "price" => 170]
        ]
    ],
    [
        "id" => 12,
        "name" => "Socks",
        "category" => "Clothing",
        "image_url" => "https://imgs.search.brave.com/dSXjSzv7LETkM1nJHQOOTXaNCvn86pr2GvrNkRTz_BA/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly9tZWRp/YS5pc3RvY2twaG90/by5jb20vaWQvNDk0/MjE0MjU0L3Bob3Rv/L3NvY2tzLmpwZz9z/PTYxMng2MTImdz0w/Jms9MjAmYz1LSGEt/WFB5RXdvbHFJdWd6/R0xhY3RhYnlFLXZm/bTRPMkxTSGVTZWtS/c0hFPQ",
        "varieties" => [
            ["id" => 1201, "name" => "Ankle", "price" => 50],
            ["id" => 1202, "name" => "Crew", "price" => 60],
            ["id" => 1203, "name" => "Knee High", "price" => 80]
        ]
    ],
    [
        "id" => 13,
        "name" => "Wristwatch",
        "category" => "Accessories",
        "image_url" => "https://imgs.search.brave.com/B3ONJ6tGKHkkDY-jGJ1_6AFDXRTqyopMjs9uogXJIrU/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly90My5m/dGNkbi5uZXQvanBn/LzExLzE4LzQwLzg4/LzM2MF9GXzExMTg0/MDg4MDVfZ2h2V2FK/VFp4TE5DNlZSd0tR/eVN3MjRpMGhDREpB/cDYuanBn",
        "varieties" => [
            ["id" => 1301, "name" => "Leather Strap", "price" => 799],
            ["id" => 1302, "name" => "Metal Strap", "price" => 899],
        ]
    ],
    [
        "id" => 14,
        "name" => "Backpack",
        "category" => "Accessories",
        "image_url" => "https://imgs.search.brave.com/PcYc0EtbnqqMkYXkmhANouIYZ49yfCPzaum-R7XSR64/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly9jb250/ZW50LWFic29sdXRl/LXNub3cucmxhYi5u/ZXQvdXBsb2FkLzEv/bWVyY2gvYTVlZmYy/OTFfMTItYmFja3Bh/Y2tzMi5qcGc",
        "varieties" => [
            ["id" => 1401, "name" => "Small", "price" => 550],
            ["id" => 1402, "name" => "Large", "price" => 750],
        ]
    ],
    [
        "id" => 15,
        "name" => "Pen",
        "category" => "Stationery",
        "image_url" => "https://imgs.search.brave.com/TyXDo-b_O8_P09SwJ_CdQDbT5NY9zD0Orif856m5ifo/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9tZWRp/YS5pc3RvY2twaG90/by5jb20vaWQvMTQz/ODMzNzc0OS9waG90/by9wZW4taXNvbGF0/ZWQuanBnP3M9NjEy/eDYxMiZ3PTAmaz0y/MCZjPWVzVWFzN0g4/RmpPUXVuQ3ZQRS0t/Z2c5ZW1FRmN6UjM1/ZEExMkJNU3hKczg9",
        "varieties" => [
            ["id" => 1501, "name" => "Ballpoint", "price" => 20],
            ["id" => 1502, "name" => "Gel", "price" => 30],
        ]
    ],
    [
        "id" => 16,
        "name" => "Desk Lamp",
        "category" => "Home Decor",
        "image_url" => "https://imgs.search.brave.com/TyXDo-b_O8_P09SwJ_CdQDbT5NY9zD0Orif856m5ifo/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9tZWRp/YS5pc3RvY2twaG90/by5jb20vaWQvMTQz/ODMzNzc0OS9waG90/by9wZW4taXNvbGF0/ZWQuanBnP3M9NjEy/eDYxMiZ3PTAmaz0y/MCZjPWVzVWFzN0g4/RmpPUXVuQ3ZQRS0t/Z2c5ZW1FRmN6UjM1/ZEExMkJNU3hKczg9",
        "varieties" => [
            ["id" => 1601, "name" => "LED", "price" => 600],
            ["id" => 1602, "name" => "Incandescent", "price" => 450],
        ]
    ],
    [
        "id" => 17,
        "name" => "Yoga Mat",
        "category" => "Lifestyle",
        "image_url" => "https://imgs.search.brave.com/NietDzJxi_NSUAwCfcfa7fwp7Risw3Ep2lfKrxLtYuI/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9tZWRp/YS5pc3RvY2twaG90/by5jb20vaWQvMTQ5/MDI3ODA4L3Bob3Rv/L3lvZ2EtbWF0Lmpw/Zz9zPTYxMng2MTIm/dz0wJms9MjAmYz1E/dDFfUHYyRlFZdlNC/ZWdkWEo5SnJYNWh3/VDcybHl5dFVDOC1J/VXF5N2RFPQ",
        "varieties" => [
            ["id" => 1701, "name" => "Standard", "price" => 400],
            ["id" => 1702, "name" => "Thick", "price" => 550],
        ]
    ],
        [
        "id" => 18,
        "name" => "Hoodie",
        "category" => "Clothing",
        "image_url" => "https://imgs.search.brave.com/22yEQo1JgRHRA4Rm9x6YDMr-oliJpY7Q7Frnm2R_xsM/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9tYWdu/bGVucy5jb20vY2Ru/L3Nob3AvZmlsZXMv/MjRSNFcwMDIwNUZf/RkxBVExBWV8xUkVT/SVpFRF84MjkwOTg2/Ny02NDZjLTRmMjkt/OGQxOC00MmI1ZDU0/ZDg0MTMuanBnP3Y9/MTcyOTc5NzkwMCZ3/aWR0aD05Njg",
        "varieties" => [
            ["id" => 1801, "name" => "Small", "price" => 500],
            ["id" => 1802, "name" => "Medium", "price" => 550],
            ["id" => 1803, "name" => "Large", "price" => 600]
        ]
    ],
    [
        "id" => 19,
        "name" => "Beanie",
        "category" => "Clothing",
        "image_url" => "https://imgs.search.brave.com/obaFfsJ_j_hS5j65-mktYh_P8eliV3TnfzPFpmTuDbs/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly93d3cu/Z2lnaXBpcC5jb20v/Y2RuL3Nob3AvZmls/ZXMvYmVhbmllcy1h/c3Blbi1rbml0LXBy/aW50LWJlYW5pZS00/MTQ1OTE3NjczNDg1/MS5qcGc_dj0xNzI2/NjIyNzQ5JndpZHRo/PTEwMDA",
        "varieties" => [
            ["id" => 1901, "name" => "Wool", "price" => 200],
            ["id" => 1902, "name" => "Cotton", "price" => 180],
        ]
    ],
    [
        "id" => 20,
        "name" => "Scarf",
        "category" => "Clothing",
        "image_url" => "https://imgs.search.brave.com/-ETaPVlzXodVSxHKk6tMhbsC0Mv7E1TK_hA0JXRBy0Q/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9tZWRp/YS5pc3RvY2twaG90/by5jb20vaWQvMTg1/MjgxNzg4L3Bob3Rv/L3NjYXJmLmpwZz9z/PTYxMng2MTImdz0w/Jms9MjAmYz1MWGlB/N3Z5RXBnMWFkdkpj/UzloSHkzZVZucWds/bkVmR1lLVkFPWWdY/X1JNPQ",
        "varieties" => [
            ["id" => 2001, "name" => "Silk", "price" => 350],
            ["id" => 2002, "name" => "Cashmere", "price" => 450],
        ]
    ],
    [
        "id" => 21,
        "name" => "Wallet",
        "category" => "Accessories",
        "image_url" => "https://imgs.search.brave.com/GoDs4rJbwrTNki4DwX6WbXredZeDlsR67I_DjYhtscQ/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly93d3cu/cG9wb3ZsZWF0aGVy/LmNvbS9jZG4vc2hv/cC9maWxlcy9sZWF0/aGVyLXRyYWRpdGlv/bmFsLXdhbGxldC1l/bmdsaXNoLXRhbi1w/b3Bvdi1sZWF0aGVy/LTQxNDA5MTE0ODAw/MzUxLmpwZz92PTE3/NDAxNzg3NjAmd2lk/dGg9MTYwMA",
        "varieties" => [
            ["id" => 2101, "name" => "Leather", "price" => 600],
            ["id" => 2102, "name" => "Canvas", "price" => 400],
        ]
    ],
    [
        "id" => 22,
        "name" => "Belt",
        "category" => "Accessories",
        "image_url" => "https://imgs.search.brave.com/EBE-tvIAEllYotcJC9IkliZwLWaUME59LLLduQmJr_8/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly90NC5m/dGNkbi5uZXQvanBn/LzAwLzA0LzYxLzg5/LzM2MF9GXzQ2MTg5/OTZfUmEwNVN1dVVD/dUNKQ045RUV6NGtm/eWYyQlNjQVE5Zmku/anBn",
        "varieties" => [
            ["id" => 2201, "name" => "Leather", "price" => 450],
            ["id" => 2202, "name" => "Fabric", "price" => 300],
        ]
    ],
    [
        "id" => 23,
        "name" => "Ruler",
        "category" => "Stationery",
        "image_url" => "https://imgs.search.brave.com/Ts1D5qBUeLdu3vcbfgEJDjNYlDXH1Bbzk1KQV1gGftg/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly9tZWRp/YS5nZXR0eWltYWdl/cy5jb20vaWQvOTQx/NzMyMzg4L3Bob3Rv/LzgtaW5jaC13b29k/LXJ1bGVyLmpwZz9z/PTYxMng2MTImdz0w/Jms9MjAmYz1VMUJS/VzZOUUI4anNKY3d1/X2ptVGozamZkU0N3/UnhIdFhXUDEySXJa/S3VvPQ",
        "varieties" => [
            ["id" => 2301, "name" => "30cm", "price" => 30],
            ["id" => 2302, "name" => "15cm", "price" => 20],
        ]
    ],
    [
        "id" => 24,
        "name" => "Eraser",
        "category" => "Stationery",
        "image_url" => "https://imgs.search.brave.com/XtVoALeNgZePvp5k2wLfg4Vsd9WfueXb23sy8dZLXs8/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly9tZWRp/YS5pc3RvY2twaG90/by5jb20vaWQvMTcx/MzY2NjMwL3Bob3Rv/L2VyYXNlci5qcGc_/cz02MTJ4NjEyJnc9/MCZrPTIwJmM9dVZN/c1VSUGVkQkMwTWdo/aU5Ub2doODJNLVVj/U2VZQXUyOVBXc2Jt/WnNOUT0",
        "varieties" => [
            ["id" => 2401, "name" => "White", "price" => 10],
            ["id" => 2402, "name" => "Colored", "price" => 12],
        ]
    ],
    [
        "id" => 25,
        "name" => "Picture Frame",
        "category" => "Home Decor",
        "image_url" => "https://imgs.search.brave.com/fElNn4jdlBEBuJucpQgig6kHDUpqA30P7JVRWS47hqI/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly9weXhp/cy5ueW1hZy5jb20v/djEvaW1ncy9mMDIv/OTI2LzNmNmI4OWIx/YWQxNWUwNzZkMjdi/ZmUyYjE3MmQ1YTVh/MDItZmFtaWxpbmsu/cnNxdWFyZS53NjAw/LmpwZw",
        "varieties" => [
            ["id" => 2501, "name" => "4x6", "price" => 200],
            ["id" => 2502, "name" => "5x7", "price" => 250],
        ]
        
    ],
    [
        "id" => 26,
        "name" => "Candle",
        "category" => "Home Decor",
        "image_url" => "https://imgs.search.brave.com/TEF8sI2YTo0rmFawRxN33VzNAYoEwBweirm6OKMNDSA/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly9jb2xv/bmlhbGNhbmRsZS5j/b20vY2RuL3Nob3Av/cHJvZHVjdHMvMTIz/ODY0XzFfYzNjYTli/OTMtYzRjNS00MTJk/LWI1ZDUtNWE4YTRh/ZTJmMzI1LmpwZz92/PTE3MjIyNjM3ODAm/d2lkdGg9MTAwMA",
        "varieties" => [
            ["id" => 2601, "name" => "Scented", "price" => 150],
            ["id" => 2602, "name" => "Unscented", "price" => 120],
        ]
    ],
    [
        "id" => 27,
        "name" => "Towel",
        "category" => "Lifestyle",
        "image_url" => "https://imgs.search.brave.com/Zz3pZjm3FLIPQeGPo9aCJmB9HiT-BC8OXrEyfSWv6LQ/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly90NC5m/dGNkbi5uZXQvanBn/LzAxLzA0Lzc5LzE3/LzM2MF9GXzEwNDc5/MTcyNl82cDR2RDF6/dkxRRlJPb1FOOGxl/NGJhaTR2UnFmQk1y/Ny5qcGc",
        "varieties" => [
            ["id" => 2701, "name" => "Bath", "price" => 300],
            ["id" => 2702, "name" => "Hand", "price" => 150],
        ]
    ],
    [
        "id" => 28,
        "name" => "Lunch Box",
        "category" => "Lifestyle",
        "image_url" => "https://imgs.search.brave.com/f82e07Em11R8B7JgP_9UIsdLYnOc7aPG6p8eyyGPG54/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly93d3cu/YnVpbHRueS5jb20v/Y2RuL3Nob3AvcHJv/ZHVjdHMvQlVJTFRG/T09EQ09OVEFJTkVS/U19GZWF0dXJlc19H/cmFwaGljc19CdWls/dEx1bmNoYm94Lmpw/Zz92PTE2MjM0NDE1/NDQmd2lkdGg9MTAw/MQ",
        "varieties" => [
            ["id" => 2801, "name" => "Small", "price" => 250],
            ["id" => 2802, "name" => "Large", "price" => 350],
        ]
    ],
    [
        "id" => 29,
        "name" => "Jeans",
        "category" => "Clothing",
        "image_url" => "https://imgs.search.brave.com/59E_kxyy-cODQU7WsmKyiH7P5vTDJ-w5HDh_N1eXUKU/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly9pbWcu/ZnJlZXBpay5jb20v/ZnJlZS1waG90by9q/ZWFuc18xMjAzLTgw/OTMuanBnP3NlbXQ9/YWlzX2h5YnJpZA",
        "varieties" => [
            ["id" => 2901, "name" => "Slim Fit", "price" => 800],
            ["id" => 2902, "name" => "Regular Fit", "price" => 750],
        ]
    ],
    [
        "id" => 30,
        "name" => "Dress",
        "category" => "Clothing",
        "image_url" => "https://imgs.search.brave.com/4Zwxn3xSUt0wS2clzhB5Sm_BO9kNJPkMVVxY1ny7IZs/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly90NC5m/dGNkbi5uZXQvanBn/LzAwLzUyLzE5LzQ1/LzM2MF9GXzUyMTk0/NTc3X2NHWDlPQWJn/bjZvOWFlUTYyMEVF/T00xckFGODFuU3BG/LmpwZw",
        "varieties" => [
            ["id" => 3001, "name" => "Small", "price" => 900],
            ["id" => 3002, "name" => "Medium", "price" => 950],
        ]
    ],
    [
        "id" => 31,
        "name" => "Tie",
        "category" => "Accessories",
        "image_url" => "https://imgs.search.brave.com/-Lp_O-Aeu0LXpKZ337O2XbILb0io2h0pKtb_ASC45m0/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly9tZWRp/YS5pc3RvY2twaG90/by5jb20vaWQvMTE2/Mzk3NDgwNC9waG90/by90aWUtaXNvbGF0/ZWQtb24td2hpdGUu/anBnP3M9NjEyeDYx/MiZ3PTAmaz0yMCZj/PXRya0tlUGJKS1VJ/TjlXeDlXdldRMkJC/Z1lYZXFWMWU3WFlt/VEdhOWVYd0U9",
        "varieties" => [
            ["id" => 3101, "name" => "Silk", "price" => 500],
            ["id" => 3102, "name" => "Polyester", "price" => 350],
        ]
    ],
    [
        "id" => 32,
        "name" => "Cufflinks",
        "category" => "Accessories",
        "image_url" => "https://imgs.search.brave.com/At8Nm4Rpl38gANORVl6jxVwnCagq2ZIco5ZvMddpMMk/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly93d3cu/dGhlY3VmZmxpbmtz/dG9yZS5jby51ay9j/ZG4vc2hvcC9wcm9k/dWN0cy9kYmVjMWJm/Mi05YjlmLTQ5ZmQt/YjBkNi1kZmQ5M2Ez/YzI4YTBfNDgweDQ4/MC5qcGc_dj0xNTUx/MzgzODY0",
        "varieties" => [
            ["id" => 3201, "name" => "Silver", "price" => 700],
            ["id" => 3202, "name" => "Gold", "price" => 850],
        ]
    ],
    [
        "id" => 33,
        "name" => "Stapler",
        "category" => "Stationery",
        "image_url" => "https://imgs.search.brave.com/ZDbEW3GNFXMrFRg_K9nbDpxcAJnyd05cV5Y4twxwKSI/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly9pbWFn/ZXMuc2Fsc2lmeS5j/b20vaW1hZ2UvdXBs/b2FkL3MtLUFJU1BL/NW9uLS0vd18yNjAs/cV85MCxjc19zcmdi/L2ZoYzhtMDN1a2J2/a3gyMzc3Nmw1Lmpw/Zw",
        "varieties" => [
            ["id" => 3301, "name" => "Standard", "price" => 100],
            ["id" => 3302, "name" => "Heavy Duty", "price" => 200],
        ]
    ],
    [
        "id" => 34,
        "name" => "Paper Clips",
        "category" => "Stationery",
        "image_url" => "https://imgs.search.brave.com/0LyG5BFSXj0-rG7ZpU2zH48DukC5OZjZ55Ftl2B1YXY/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly9tZWRp/YS5nZXR0eWltYWdl/cy5jb20vaWQvMTgz/MDUwODg2L3Bob3Rv/L3BhcGVyLWNsaXBz/LmpwZz9zPTYxMng2/MTImdz0wJms9MjAm/Yz1LVnVoelNnZW1H/OWhydXZsLXhHeWZw/Q1FTMlBhODl5T2FW/bERoZl82N3dRPQ",
        "varieties" => [
            ["id" => 3401, "name" => "Small", "price" => 30],
            ["id" => 3402, "name" => "Large", "price" => 40],
        ]
    ],
    [
        "id" => 35,
        "name" => "Vase",
        "category" => "Home Decor",
        "image_url" => "https://imgs.search.brave.com/U-YQnk62P_1CGB0dBX2TCxrXGANineK4F0LCo5Bs0VU/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly9tZWRp/YS5pc3RvY2twaG90/by5jb20vaWQvNDYx/Mjg1MzExL3Bob3Rv/L3BvcmNlbGFpbi12/YXNlLmpwZz9zPTYx/Mng2MTImdz0wJms9/MjAmYz1tR1ZOUkIy/R1FzWXdOZ2lTUmt4/MXlmTnJ5SmRWX1ZN/UDg0Y0ZVWW42dlRn/PQ",
        "varieties" => [
            ["id" => 3501, "name" => "Ceramic", "price" => 400],
            ["id" => 3502, "name" => "Glass", "price" => 500],
        ]
    ],
    [
        "id" => 36,
        "name" => "Wall Art",
        "category" => "Home Decor",
        "image_url" => "https://imgs.search.brave.com/NCW1UCIKHZb-EBiVk5TJm-ILqNJw6yrZ9nHCWhpC_HY/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly9iaWd3/YWxsZGVjb3IuY29t/L3dwLWNvbnRlbnQv/dXBsb2Fkcy8yMDIy/LzAxL0Fic3RyYWN0/LU1vdXRoLUNvbGxh/Z2UtUG9wLUFydC1X/YWxsLUFydC01MDB4/NTAwLmpwZw",
        "varieties" => [
            ["id" => 3601, "name" => "Print", "price" => 600],
            ["id" => 3602, "name" => "Painting", "price" => 800],
        ]
    ],
    [
        "id" => 37,
        "name" => "Thermos",
        "category" => "Lifestyle",
        "image_url" => "https://imgs.search.brave.com/YlYzkHRXivZ7oHZyexIMpN-NOVrBGsB4N5qiNDQG9ts/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly9tZWRp/YS5pc3RvY2twaG90/by5jb20vaWQvMTMx/MTI0MTI5Ni9waG90/by9tZXRhbGxpYy10/aGVybW9zLmpwZz9z/PTYxMng2MTImdz0w/Jms9MjAmYz1VNnRv/SWpQeTQ5VDN5N29F/Wm9ROGFmYkxGR1lx/YWE3elp0R1F1ZzZX/SlBBPQ",
        "varieties" => [
            ["id" => 3701, "name" => "500ml", "price" => 300],
            ["id" => 3702, "name" => "1L", "price" => 400],
        ]
    ],
    [
        "id" => 38,
        "name" => "Fitness Tracker",
        "category" => "Lifestyle",
        "image_url" => "https://imgs.search.brave.com/gSx1fzHzfxwWTEbX8IuTtxWX18EFBDVK0gXuifE19Ds/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly9ydW5t/ZWZpdC5jb20vd3At/Y29udGVudC91cGxv/YWRzLzIwMjQvMDYv/UzUtRml0bmVzcy1U/cmFja2VyLUJsYWNr/LTIuanBn",
        "varieties" => [
            ["id" => 3801, "name" => "Basic", "price" => 999],
            ["id" => 3802, "name" => "Advanced", "price" => 1499],
        ]
    ],
    [
        "id" => 39,
        "name" => "Jacket",
        "category" => "Clothing",
        "image_url" => "https://imgs.search.brave.com/4xlF-ZILaHyGGhqxhT83TKRF-Jhx7FlA5PwgqTvIris/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly9tZWRp/YS5nZXR0eWltYWdl/cy5jb20vaWQvNjQx/MDYyNTM4L3Bob3Rv/L2xlYXRoZXItamFj/a2V0LmpwZz9zPTYx/Mng2MTImdz0wJms9/MjAmYz14Vi1XMUw4/Snp6WURRWWJ5SXdw/WVN3b2Z2N2w3cUVY/UXduejJuYWdCem1z/PQ",
        "varieties" => [
            ["id" => 3901, "name" => "Small", "price" => 1200],
            ["id" => 3902, "name" => "Medium", "price" => 1250],
        ]
    ],
    [
        "id" => 40,
        "name" => "Sweater",
        "category" => "Clothing",
        "image_url" => "https://imgs.search.brave.com/9cc7fSmVuKrtLdv9LOIs9oq96sJd4stlb8SFGa4iDAg/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly90My5m/dGNkbi5uZXQvanBn/LzAwLzU2LzM4LzEy/LzM2MF9GXzU2Mzgx/MjA2X1dSZFNZRjBU/UThBZWJhYVVhRkVT/c0FIUTcxTHpUcDVx/LmpwZw",
        "varieties" => [
            ["id" => 4001, "name" => "Small", "price" => 700],
            ["id" => 4002, "name" => "Medium", "price" => 750],
        ]
    ],
    [
        "id" => 41,
        "name" => "Gloves",
        "category" => "Accessories",
        "image_url" => "https://imgs.search.brave.com/_gAfufuU6zWZmHvVs0hxvnb3c5C0RtBR7ConBwoA7Qo/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly9tZWRp/YS5pc3RvY2twaG90/by5jb20vaWQvMTgy/MjM4ODMwL3Bob3Rv/L3dpbnRlci1nbG92/ZXMuanBnP3M9NjEy/eDYxMiZ3PTAmaz0y/MCZjPTJqZ2RRb09U/VkpTQmRJRFBrSDV2/RVdyekhvQl9kMENC/OXJyZmJtNTN5Tm89",
        "varieties" => [
            ["id" => 4101, "name" => "Leather", "price" => 550],
            ["id" => 4102, "name" => "Wool", "price" => 400],
        ]
    ],
    [
        "id" => 42,
        "name" => "Hat",
        "category" => "Accessories",
        "image_url" => "https://imgs.search.brave.com/PljDNhfiRj_VsxEwwnO8MozNn8I8YX9xshApN1YlIwM/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9tZWRp/YS5pc3RvY2twaG90/by5jb20vaWQvNTI2/MTMxNTAwL3Bob3Rv/L2hhdC1vbi13aGl0/ZS1iYWNrZ3JvdW5k/LmpwZz9zPTYxMng2/MTImdz0wJms9MjAm/Yz13RWFacXhxc0NB/c3loVC1xc1doOVFS/eGMxRXUwLWtta2tm/TUpUZG1TMnFZPQ",
        "varieties" => [
            ["id" => 4201, "name" => "Felt", "price" => 450],
            ["id" => 4202, "name" => "Straw", "price" => 300],
        ]
    ],
    [
        "id" => 43,
        "name" => "Highlighter",
        "category" => "Stationery",
        "image_url" => "https://imgs.search.brave.com/f1ijVa-0wk02BXvbZbbGzKN1-Lyk2FGoXkkVSQjFGX0/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly9pbWcu/ZnJlZXBpay5jb20v/cHJlbWl1bS1waG90/by9tdWx0aWNvbG9y/ZWQtaGlnaGxpZ2h0/ZXJzXzUyMjU2MC0z/MzgyNi5qcGc_c2Vt/dD1haXNfaHlicmlk",
        "varieties" => [
            ["id" => 4301, "name" => "Yellow", "price" => 40],
            ["id" => 4302, "name" => "Pink", "price" => 40],
        ]
    ],
    [
        "id" => 44,
        "name" => "Scissors",
        "category" => "Stationery",
        "image_url" => "https://imgs.search.brave.com/7tDLmB9bxGRYC-bVB6u1Pxqft11WI7ZQoe6clh68Z_o/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly9tZWRp/YS5nZXR0eWltYWdl/cy5jb20vaWQvMTcy/OTU2NTg5L3Bob3Rv/L3NjaXNzb3JzLmpw/Zz9zPTYxMng2MTIm/dz0wJms9MjAmYz1L/Q1JhSUFRMGthS0th/bWY3VWRWS2U1Uy02/RXgzZG9lY2JEMXhn/YmZVTFZnPQ",
        "varieties" => [
            ["id" => 4401, "name" => "Small", "price" => 80],
            ["id" => 4402, "name" => "Large", "price" => 100],
        ]
    ],
    [
        "id" => 45,
        "name" => "Mirror",
        "category" => "Home Decor",
        "image_url" => "https://imgs.search.brave.com/4n8wk1YLPY8VJBeLTX3xcQFwAYLIurWucsz8izClkKQ/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly93d3cu/bWNnZWVhbmRjby5j/b20vY2RuL3Nob3Av/cHJvZHVjdHMvSm9z/ZXBoaW5lTWlycm9y/LU1NSVIwMTk0LUJS/Wi0yNng0Mi1NQUlO/LmpwZz92PTE2NDQz/Mzc1MTkmd2lkdGg9/MTIwMA",
        "varieties" => [
            ["id" => 4501, "name" => "Round", "price" => 550],
            ["id" => 4502, "name" => "Square", "price" => 500],
        ]
    ],
    [
        "id" => 46,
        "name" => "Clock",
        "category" => "Home Decor",
        "image_url" => "https://imgs.search.brave.com/D_Bw1bo_7B4GP2rTNE7aXU6DqTAqy6exEnqexoaUX9E/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly93d3cu/cGVyc29uYWxpemF0/aW9ubWFsbC5jb20v/Y2F0X2ltYWdlLzE2/NS8zNDM3My05NTEx/MS0yMjAxMzEwOTQ5/NDYuanBn",
        "varieties" => [
            ["id" => 4601, "name" => "Analog", "price" => 650],
            ["id" => 4602, "name" => "Digital", "price" => 700],
        ]
    ],
    [
        "id" => 47,
        "name" => "Soap",
        "category" => "Lifestyle",
        "image_url" => "https://imgs.search.brave.com/UVwSKcx5fwnhX9KGonp5cezpTdPlrHLpTBhp2z4-fT4/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly9tLm1l/ZGlhLWFtYXpvbi5j/b20vaW1hZ2VzL0kv/NTExbzA2YmhKeUwu/anBn",
        "varieties" => [
            ["id" => 4701, "name" => "Scented", "price" => 80],
            ["id" => 4702, "name" => "Unscented", "price" => 70],
        ]
    ],
    [
        "id" => 48,
        "name" => "Toothbrush",
        "category" => "Lifestyle",
        "image_url" => "https://imgs.search.brave.com/U45YZfxja4MVhfvD6kI2ZxKsbBJ5xoQ-kPAzAomf03I/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly90My5m/dGNkbi5uZXQvanBn/LzA1Lzg5LzIzLzI0/LzM2MF9GXzU4OTIz/MjQxNV9mWDljV1Jo/RUtyMHh5NGU4MThk/Y2lHbWFKY0FOZld6/ZS5qcGc",
        "varieties" => [
            ["id" => 4801, "name" => "Soft", "price" => 60],
            ["id" => 4802, "name" => "Medium", "price" => 60],
        ]
    ],
    [
        "id" => 49,
        "name" => "Keyboard",
        "category" => "Electronics",
        "image_url" => "https://imgs.search.brave.com/WbJ69qD_hW7Szm2w0JVuPyhr-OaEld8Wm6htydoO840/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly9tYW5o/YXR0YW5wcm9kdWN0/cy51cy9jZG4vc2hv/cC9wcm9kdWN0cy9l/bmhhbmNlZC1rZXli/b2FyZC0xNTUxMTMt/M185NWZmMDZkNS03/YzgxLTQ5NGUtYWMw/Yy03ZGZjNmU3YmQ3/ZjMuanBnP3Y9MTY3/ODY4ODYyMCZ3aWR0/aD0xNDAw",
        "varieties" => [
            ["id" => 4901, "name" => "Mechanical", "price" => 1499],
            ["id" => 4902, "name" => "Membrane", "price" => 799],
        ]
    ],
    [
        "id" => 50,
        "name" => "Mouse",
        "category" => "Electronics",
        "image_url" => "https://imgs.search.brave.com/ASmR9SjpRMHkuPxms2hzh5e40xNnNuKA3ShhDliYGUU/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly9pbWFn/ZXMudGhkc3RhdGlj/LmNvbS9wcm9kdWN0/SW1hZ2VzLzBkODFh/OGQwLTNhMTYtNDI2/YS1hYjllLTQ5NzI2/OGQzNzUzYi9zdm4v/cGh5ZmFsaXAtY29t/cHV0ZXItbGFwdG9w/LWFjY2Vzc29yaWVz/LXNhMTcxMTMyN2ct/NjRfNjAwLmpwZw",
        "varieties" => [
            ["id" => 5001, "name" => "Wireless", "price" => 899],
            ["id" => 5002, "name" => "Wired", "price" => 599],
        ]
    ],
    [
        "id" => 51,
        "name" => "Monitor",
        "category" => "Electronics",
        "image_url" => "https://imgs.search.brave.com/aSTG4VuU2mfLZBurZ7h_mVJOrAsVYSrIgtFWxNt7P_U/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly93ZWJv/YmplY3RzMi5jZHcu/Y29tL2lzL2ltYWdl/L0NEVy83ODc4ODAx/PyRwcm9kdWN0X3Nl/YXJjaF9yZXN1bHQk.jpeg",
        "varieties" => [
            ["id" => 5101, "name" => "24 inch", "price" => 1999],
            ["id" => 5102, "name" => "27 inch", "price" => 2499],
        ]
    ],
    [
        "id" => 52,
        "name" => "External Hard Drive",
        "category" => "Electronics",
        "image_url" => "https://imgs.search.brave.com/F09uFcpMLD_5ydPaApnZsnJhg1vy3p2WkpFWYLafZzE/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly9pNS53/YWxtYXJ0aW1hZ2Vz/LmNvbS9zZW8vVG9z/aGliYS1DYW52aW8t/QWR2YW5jZS1QbHVz/LVBvcnRhYmxlLUV4/dGVybmFsLTJUQi1I/YXJkLURyaXZlLUhv/bmV5XzE3NWZiYTVm/LTg1MzMtNGE4OS05/Y2Q2LTEzYjcwOWRh/ODgyOS4yYTM1ZTIy/NzIzYWE1MzYwZDVk/NDBlOGFmZDZjMmU0/Mi5qcGVnP29kbkhl/aWdodD01ODAmb2Ru/V2lkdGg9NTgwJm9k/bkJnPUZGRkZGRg",
        "varieties" => [
            ["id" => 5201, "name" => "1TB", "price" => 1299],
            ["id" => 5202, "name" => "2TB", "price" => 1799],
        ]
    ],
    [
        "id" => 53,
        "name" => "Lipstick",
        "category" => "Cosmetics",
        "image_url" => "https://imgs.search.brave.com/SmYZrXpwJWqI46hAbbl0mjNcAG-6svsYqO2cKHhCPvQ/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly90My5m/dGNkbi5uZXQvanBn/LzAwLzU4LzM4LzEy/LzM2MF9GXzU4Mzgx/MjA0X0lSUk1FRU5W/MkNvSU8welI1TVhk/clNwbEVXMGxpN0Nx/LmpwZw",
        "varieties" => [
            ["id" => 5301, "name" => "Red", "price" => 250],
            ["id" => 5302, "name" => "Pink", "price" => 250],
        ]
    ],
    [
        "id" => 54,
        "name" => "Nailpolish",
        "category" => "Cosmetics",
        "image_url" => "https://imgs.search.brave.com/KJN6HQBC37GOG9vbTH_xakGXgp-Afqf2veq4qk0q0ZY/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly9tZWRp/YS5nZXR0eWltYWdl/cy5jb20vaWQvOTA5/OTk2MzQvcGhvdG8v/Y2xlYXItbmFpbC1w/b2xpc2guanBnP3M9/NjEyeDYxMiZ3PTAm/az0yMCZjPXBlYmZ4/bEpZVWd0dEtfMGw1/WWp0VDFtd25jQ3hs/NGFwa2JWVHVyU3Z1/dk09",
        "varieties" => [
            ["id" => 5401, "name" => "Red", "price" => 250],
            ["id" => 5402, "name" => "Pink", "price" => 250],
        ]
    ],
];

echo json_encode($products);