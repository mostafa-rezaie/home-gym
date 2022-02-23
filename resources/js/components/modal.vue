<template>
  <div>
    <div
      class="
        flex flex-wrap-reverse
        gap-y-24
        justify-between
        py-12
        px-6
        mx-auto
        max-w-screen-xl
        sm:px-8
        md:px-12
        lg:px-16
        xl:px-24
      "
    >
      <div class="relative z-10 md:w-1/2 w-full">
        <div class="flex justify-between px-24 py-8 max-w-screen-xl mx-auto">
          <div class="max-w-md">
            <div class="flex items-center px-1 text-xl text-red-600">
              <span class="font-medium">Build up your body</span>
            </div>
            <h1
              class="
                pt-4
                text-4xl
                sm:text-5xl
                lg:text-6xl
                tracking-tighter
                leading-tight
                whitespace-nowrap
              "
            >
              <span class="text-red-600 font-bold">Y</span>our Personal <br />
              <span class="text-red-600 font-bold">H</span>ome <br />
              <span class="text-red-600 font-bold">G</span>ym <br />
            </h1>
            <p
              class="
                pt-2
                sm:text-lg
                max-w-md
                font-normal
                text-gray-600
                leading-relaxed
              "
            >
              chose your life to be healthy and fresh again by working out in
              your home <strong>FREE</strong>
            </p>
            <div class="flex pt-8 space-x-4 h-20 sm:space-x-6">
              <button
                class="
                  flex
                  justify-center
                  items-center
                  w-full
                  sm:w-auto
                  px-8
                  bg-red-600
                  font-extrabold
                  text-white
                  rounded-xl
                  whitespace-nowrap
                  transition-shadow
                  duration-300
                "
              >
                Get started
              </button>
              <button
                class="
                  flex
                  justify-center
                  items-center
                  w-full
                  sm:w-auto
                  px-8
                  font-medium
                  text-black
                  border-2 border-black
                  rounded-xl
                  whitespace-nowrap
                  hover:shadow-xl
                  transition-shadow
                  duration-300
                "
              >
                About Us
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class="relative md:w-1/2 w-full flex flex-col justify-between">
        <img
          class="w-96 lg:w-full drop-shadow-2xl self-center lg:self-end"
          :src="'/images/avatar.png'"
          alt=""
        />
      </div>
    </div>
  </div>
</template>

<script>
export default {
  methods: {
    sayHi() {
      console.log('hey');
    },
  },
};
</script>