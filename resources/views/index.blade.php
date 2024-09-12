<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            cat5: '#1476bb',
          }
        }
      }
    }
  </script>
  <script src="{{asset('plugins/alpineCopy/alpine-clipboard.js')}}" defer></script>
  @livewireStyles
</head>
<body>
    <div class="bg-white py-5 sm:py-5">
        <div class="container mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-3xl flex justify-center">
                <img src="{{asset('images/cat5resources_logo.png')}}" class="max-w-52">
            </div>
            <div class="mt-5 py-5 mx-auto max-w-3xl flex justify-center border-b">
                <h1 class="text-3xl font-bold text-center">CAT5 Tech Whatsapp Templates</h1>
            </div>

            <div class="mt-10 mx-auto max-w-5xl grid lg:grid-cols-3 gap-4">
                <a  href="/fuel-report" class="drop-shadow-md block rounded-lg bg-white p-6 text-surface shadow-secondary-1 border-2 hover:bg-cat5 hover:text-white focus:bg-cat5 focus:text-white">
                <h2 class="mb-2 text-xl font-medium leading-tight text-center">Fuel Report</h2>
                </a>
                <a  href="/generator-deploy" class="drop-shadow-md block rounded-lg bg-white p-6 text-surface shadow-secondary-1 border-2 hover:bg-cat5 hover:text-white focus:bg-cat5 focus:text-white">
                    <h2 class="mb-2 text-xl font-medium leading-tight text-center">Generator Deploy</h2>
                </a>
                <a  href="/generator-recovery" class="drop-shadow-md block rounded-lg bg-white p-6 text-surface shadow-secondary-1 border-2 hover:bg-cat5 hover:text-white focus:bg-cat5 focus:text-white">
                    <h2 class="mb-2 text-xl font-medium leading-tight text-center">Generator Recovery</h2>
                </a>

              </div>
        </div>
    </div>


@livewireScripts
</body>
</html>
