</script>
<!DOCTYPE html>
<html lang="en" class="dark">
<head>
<meta charset="UTF-8" /> 
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width,initial-scale=1.0" />
<title>Top 10 Music</title>
<link rel="stylesheet" herf="./assets/css/tailwind.css">
<link rel="stylesheet" herf="./assets/css/tailwind.css">
</head>
<body class="bg-primary front-open-sans grid place-items-center h-screen "> 
<div class="bg-gray-800 grid grid-cols-2 rounded-md overflow-hidden">

<div>
<img src="/assets/images/cover.jpg" class="w-full h-full object-cover alt="cover">
</div>

<div class="text-center bg-black text-gray-200">
<div class="px-10 py 12">

<div>
    <h1 class="text-3xl font-bold text-primary">Monody (feat. Laura Brehm)</h1>
    <h2 class="font-bold text mt-3">TheFatRat</h2>
    <div class="flex itema-center justify-around tetx-primary px-5">
        
    <button class="control-button">
    <svg class="w-5 h-5" viewBox="0 0 24 24"><g fill="none"><path d="M2.75 20a1 1 0 1 0 2 0V4a1 1 0 1 0-2 0v16z" fill="currentColor"></path><path d="M20.75 19.053c0 1.424-1.612 2.252-2.77 1.422L7.51 12.968a1.75 1.75 0 0 1 .075-2.895l10.47-6.716c1.165-.748 2.695.089 2.695 1.473v14.223z" fill="currentColor"></path></g></svg>
    </button>

    <button class="control-button">
    <svg class="w-9 h-9" viewBox="0 0 36 36"><rect class="clr-i-solid clr-i-solid-path-1" x="3.95" y="4" width="11" height="28" rx="2.07" ry="2.07" fill="currentColor"></rect><rect class="clr-i-solid clr-i-solid-path-2" x="20.95" y="4" width="11" height="28" rx="2.07" ry="2.07" fill="currentColor"></rect></svg>
    </button>

    <button class="control-button">
    <svg class="w-5 h-5" viewBox="0 0 24 24"><g fill="none"><path d="M21 4a1 1 0 1 0-2 0v16a1 1 0 1 0 2 0V4z" fill="currentColor"></path><path d="M3 4.947c0-1.424 1.612-2.252 2.77-1.422l10.47 7.507a1.75 1.75 0 0 1-.075 2.895l-10.47 6.716C4.53 21.39 3 20.554 3 19.17V4.947z" fill="currentColor"></path></g></svg>
    </button>
    </div>

    <div class="flex items-center gap-5 mt-8">
        <div class="text-sm opacity-80">00:30</div>
        <div class="relative bg-gray-800 w-full h-2 rounded">
        <div id="progress-slider" class="absolute top-0 left-0 bg-primary h-2 rounded-l-md w-1/2" ></div>
            <input type="range" class="slider">
        </div>
        <div class="text-sm opacity-80">04:30</div>
    </div>
</div>
</div>
</div>
</div>

<script>
    const musicSlider = document.querySelector('selector');
    const proggressSlider = document.querySelector('#progress-slider');
    progressSlider.style.width = musicSlider.value + '%'
    musicSlider.addEventListener('input',e ⇒ {
        proggressSlider.style.width = e.target.value + '%'
    }
    )
</script>
</body>
<script> 

<main id="main">
    <div class="works" id="album">
        <div class="container">
            <h3 class="tittle_w3ls cen">Top 10 musik </h3>
            <div class="inner_sec_info_agile-w3ls">
                <div class="column add-bottom">
                    <div id="mainwrap">
                        <div id="nowPlay">
                            <span class="right" id="npTitle"></span>
                            <span class="left" id="npAction">Paused...</span>
                        </div>
                        <div id="audiowrap">
                            <div id="audio0">
                                <audio preload id="audio1" controls="controls">Your browser does not support HTML5 Audio!</audio>
                            </div>
                        </div>
                        <div id="plwrap">
                            <ul id="plList"></ul>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</main>

  </style>
  </head> 
  <table class="table-auto">
  <thead>
    <tr>
      <th>Song</th>
      <th>Artist</th>
      <th>Year</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>The Sliding Mr. Bones (Next Stop, Pottersville)</td>
      <td>Malcolm Lockyer</td>
      <td>1961</td>
    </tr>
    <tr>
      <td>Witchy Woman</td>
      <td>The Eagles</td>
      <td>1972</td>
    </tr>
    <tr>
      <td>Shining Star</td>
      <td>Earth, Wind, and Fire</td>
      <td>1975</td>
    </tr>
  </tbody>
</table>


