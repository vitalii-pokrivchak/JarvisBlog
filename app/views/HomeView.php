<div class="container mx-auto px-10 py-6">
  <div class="flex w-full justify-between select-none items-center">
    <div class="text-center rounded-full shadow-inner bg-gradient-to-r from-green-500 via-green-700 to-green-900 py-3 px-3.5">
      <a href="#" class="text-white text-3xl font-mono font-extrabold">JB</a>
    </div>
    <div class="justify-end flex items-center">
      <div class="text-center">
        <a href="#" class="text-green-600 rounded-md p-4 text-xl font-mono font-bold uppercase hover:bg-green-600 hover:text-white transition-all duration-500">Subscribe</a>
      </div>
      <div class="text-center ml-4">
        <a href="#" class="text-green-600 p-4 rounded-md text-xl font-mono font-bold uppercase hover:bg-green-600 hover:text-white transition-all duration-500">Sign Up</a>
      </div>
    </div>
  </div>
  <div class="container flex items-center mt-6 py-2 overflow-x-auto scrollbar select-none h-20">
    <div class="whitespace-nowrap text-center text-2xl text-gray-800 font-medium">
      <?php foreach ($categories as $category) : ?>
        <a href="#" class="p-4 text-center align-middle hover:text-green-500 transition-all"><?= $category->GetTitle() ?></a>
      <?php endforeach; ?>
    </div>
  </div>
  <div class="container mt-10">
    <div class="w-full bg-green-400 rounded-3xl text-white shadow-xl px-16 py-16">
      <div class="container">
        <h1 class="text-4xl mb-6 font-bold"><?= $first_post->GetTitle() ?></h1>
        <p class="text-2xl mt-2 font-semibold">
          <?= $first_post->GetShortContent() ?>
        </p>
        <div class="flex justify-end items-center">
          <a href="#">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="{2}" d="M14 5l7 7m0 0l-7 7m7-7H3" />
            </svg>
          </a>
        </div>
      </div>
    </div>

    <div class="container w-full h-full my-16">
      <div class="flex w-full h-full items-center justify-between flex-col sm:flex-col md:flex-col lg:flex-col xl:flex-row">
        <?php foreach ($data as $d) : ?>
          <div class="container flex-1 h-72 flex-nowrap p-10 mt-10 md:mt-10 lg:mt-10 xl:mt-0 lg:mr-0 xl:mr-5 bg-gray-50 rounded-3xl shadow-xl hover:text-white hover:bg-gray-900 transition-all duration-1000 hover:cursor-pointer">
            <div class="flex justify-between mb-3">
              <h3 class="font-bold text-red-600 italic text-2xl uppercase font-mono">
                <?= $d->GetCategory()->GetTitle() ?>
              </h3>
              <h5 class="font-semibold text-2xl text-green-400 text-right">
                <?= $d->GetCreatedAt() ?>
              </h5>
            </div>
            <h3 class="text-4xl text-left mb-6 font-serif">
              <?= $d->GetTitle() ?>
            </h3>

            <p class="text-left font-semibold text-xl text-gray-600">
              <?= $d->GetShortContent() ?>
            </p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- Latest posts -->

    <div class="container mt-10">
      <h1 class="text-6xl font-extrabold uppercase">Latest</h1>
      <?php foreach ($data as $d) : ?>
        <div class="container bg-blue-500 shadow-xl rounded-lg p-6 mt-10 px-12">
          <div class="container mt-10">
            <div class="flex flex-col sm:flex-col md:flex-col lg:flex-row xl:flex-row justify-between font-bold text-white items-start sm:items-start md:items-start lg:items-center xl:items-center lg:text-center xl:text-center">
              <h3 class="text-3xl sm:text-3xl md:text-3xl lg:text-3xl xl:text-4xl font-extrabold">
                <?= $d->GetTitle(); ?>
              </h3>
              <h3 class="text-2xl mt-4 sm:mt-4 md:mt-4 lg:mt-0 xl:mt-0">
                <?= $d->GetCreatedAt(); ?>
              </h3>
            </div>

            <p class="text-2xl mt-6 text-white font-medium">
              <?= $d->GetShortContent() ?>
            </p>

            <div class="flex justify-between items-center mt-10">
              <div>
                <a href="#" class="inline-flex items-center hover:bg-gray-900 rounded-full transition-all duration-500 hover:shadow-md h-12 pr-6">
                  <img src="./app/images/author.jpg" class="h-12 w-12 rounded-full" alt="" />
                  <h3 class="ml-2 text-2xl font-medium font-mono text-white">
                    <?= $d->GetAuthor()->GetNickName() ?>
                  </h3>
                </a>
              </div>
              <div class="flex items-center">
                <div class="container">
                  <div id="like">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" class="h-12 hover:cursor-pointer" viewBox="0 0 24 24" stroke="#fff">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="{2}" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                    </svg>
                  </div>
                </div>
                <div class="container">
                  <a href="#" class="group text-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 ml-3" fill="none" viewBox="0 0 24 24" stroke="#fff">
                      <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="{2}" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <!-- Footer -->

    <div class="container mt-20 border-t-2">
      <div class="flex justify-between items-center mt-4">
        <div class="text-center rounded-full shadow-inner bg-gradient-to-r from-green-500 via-green-700 to-green-900 py-3 px-3.5">
          <a href="#" class="text-white text-3xl font-mono font-extrabold">JB</a>
        </div>

        <div class="flex">
          <a href="https://github.com/Jarvis-Technologies/JarvisBlog" target="_blank" class="inline-flex justify-center items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" class="h-12 text-gray-600 stroke-current" viewBox="0 0 24 24" stroke="#fff">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
            </svg>
            <span class="mx-2 text-xl font-mono">with</span>
            <svg xmlns="http://www.w3.org/2000/svg" fill="current" class="h-12 fill-current text-red-600 stroke-current" viewBox="0 0 24 24" stroke="current">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="{2}" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
            </svg>
            <span class="ml-2 text-xl font-mono">by</span>
            <span class="ml-2 font-bold bg-gray-900 rounded-lg py-2 px-4 font-mono uppercase text-white text-xl">Jarvis-Technologies</span>
          </a>
        </div>
      </div>
    </div>
  </div>