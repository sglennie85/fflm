<script setup>
import {ref} from 'vue';
import {Head, Link, router} from '@inertiajs/vue3';
import ApplicationMark from '@/Components/ApplicationMark.vue';
import Banner from '@/Components/Banner.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import {
  Dialog,
  DialogPanel,
  Menu,
  MenuButton,
  MenuItem,
  MenuItems,
  TransitionChild,
  TransitionRoot
} from '@headlessui/vue'
import {
  AcademicCapIcon,
  Bars3Icon,
  BellIcon,
  BookOpenIcon,
  CogIcon,
  HomeIcon,
  ListBulletIcon,
  SquaresPlusIcon,
  StarIcon,
  TagIcon,
  UserGroupIcon,
  UsersIcon,
  XMarkIcon,
} from '@heroicons/vue/24/outline'
import {
  ChevronLeftIcon,
  EnvelopeIcon,
  FunnelIcon,
  MagnifyingGlassIcon,
  PhoneIcon,
  ChevronDownIcon
} from '@heroicons/vue/20/solid'

defineProps({
  title: String,
});

const showingNavigationDropdown = ref(false);

const switchToTeam = (team) => {
  router.put(route('current-team.update'), {
    team_id: team.id,
  }, {
    preserveState: false,
  });
};

const logout = () => {
  router.post(route('logout'));
};

const user = {
  name: 'Tom Cook',
  imageUrl:
      'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80',
}
const navigation = [
  {name: 'Dashboard', route: 'web.dashboard', icon: HomeIcon, current: false},
  {name: 'Players', route: 'web.players', icon: UserGroupIcon, current: false},
  {name: 'Star Players', route: 'web.stars', icon: StarIcon, current: false},
  {name: 'Teams', route: 'web.teams', icon: ListBulletIcon, current: false},
  {name: 'Skills', route: 'web.skills', icon: AcademicCapIcon, current: false},
  {name: 'Team Rules', route: 'web.team_rules', icon: BookOpenIcon, current: false},
  {name: 'Traits', route: 'web.traits', icon: TagIcon, current: false},
]
// const secondaryNavigation = [
//     { name: 'Apps', href: '#', icon: SquaresPlusIcon },
//     { name: 'Settings', href: '#', icon: CogIcon },
// ]

const sidebarOpen = ref(false)
const sidebarType = ref(1)

</script>

<template>
  <Head :title="title"/>
  <Banner/>

  <div class="flex h-full bg-gray-100 min-h-screen overflow-hidden relative">
    <TransitionRoot as="template" :show="sidebarOpen">
      <Dialog as="div" class="relative z-40 lg:hidden" @close="sidebarOpen = false">
        <TransitionChild as="template" enter="transition-opacity ease-linear duration-300"
                         enter-from="opacity-0" enter-to="opacity-100"
                         leave="transition-opacity ease-linear duration-300" leave-from="opacity-100"
                         leave-to="opacity-0">
          <div class="fixed inset-0 bg-gray-600 bg-opacity-75"/>
        </TransitionChild>

        <div class="fixed inset-0 z-40 flex">
          <TransitionChild as="template" enter="transition ease-in-out duration-300 transform"
                           enter-from="-translate-x-full" enter-to="translate-x-0"
                           leave="transition ease-in-out duration-300 transform" leave-from="translate-x-0"
                           leave-to="-translate-x-full">
            <DialogPanel class="relative flex w-full max-w-xs flex-1 flex-col bg-white focus:outline-none">
              <TransitionChild as="template" enter="ease-in-out duration-300" enter-from="opacity-0"
                               enter-to="opacity-100" leave="ease-in-out duration-300"
                               leave-from="opacity-100" leave-to="opacity-0">
                <div class="absolute top-0 right-0 -mr-12 pt-2">
                  <button type="button"
                          class="ml-1 flex h-10 w-10 items-center justify-center rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                          @click="sidebarOpen = false">
                    <span class="sr-only">Close sidebar</span>
                    <XMarkIcon class="h-6 w-6 text-white" aria-hidden="true"/>
                  </button>
                </div>
              </TransitionChild>
              <div class="h-0 flex-1 overflow-y-auto pt-5 pb-4">
                <div class="flex flex-shrink-0 items-center px-4">
                  <img class="h-8 w-auto"
                       src="https://tailwindui.com/img/logos/mark.svg?color=pink&shade=500"
                       alt="Your Company"/>
                </div>
                <nav aria-label="Sidebar" class="mt-5">
                  <div class="space-y-1 px-2">
                    <a v-for="item in navigation" :key="item.name" :href="item.href" :class="[item.current ? 'bg-gray-100 text-gray-900' : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900', 'group flex items-center rounded-md px-2 py-2 text-base font-medium']" :aria-current="item.current ? 'page' : undefined">
                      <component :is="item.icon" :class="[item.current ? 'text-gray-500' : 'text-gray-400 group-hover:text-gray-500', 'mr-4 h-6 w-6']" aria-hidden="true" />
                      {{ item.name }}
                    </a>
                  </div>
                  <hr class="my-5 border-t border-gray-200" aria-hidden="true" />
                  <div class="space-y-1 px-2">
                    <a v-for="item in secondaryNavigation" :key="item.name" :href="item.href" class="group flex items-center rounded-md px-2 py-2 text-base font-medium text-gray-600 hover:bg-gray-50 hover:text-gray-900">
                      <component :is="item.icon" class="mr-4 h-6 w-6 flex-shrink-0 text-gray-400 group-hover:text-gray-500" aria-hidden="true" />
                      {{ item.name }}
                    </a>
                  </div>
                </nav>
              </div>
              <div class="flex flex-shrink-0 border-t border-gray-200 p-4">
                <a href="#" class="group block flex-shrink-0">
                  <div class="flex items-center">
                    <div>
                      <img class="inline-block h-10 w-10 rounded-full" :src="user.imageUrl" alt="" />
                    </div>
                    <div class="ml-3">
                      <p class="text-base font-medium text-gray-700 group-hover:text-gray-900">{{ user.name }}</p>
                      <p class="text-sm font-medium text-gray-500 group-hover:text-gray-700">View profile</p>
                    </div>
                  </div>
                </a>
              </div>
            </DialogPanel>
          </TransitionChild>
          <div class="w-14 flex-shrink-0" aria-hidden="true">
            <!-- Force sidebar to shrink to fit close icon -->
          </div>
        </div>
      </Dialog>
    </TransitionRoot>

    <div
        v-if="sidebarType === 1"
        class="hidden lg:flex lg:flex-shrink-0 overflow-y-auto">
      <div class="flex flex-col">
        <!-- Sidebar component, swap this element with another sidebar if you like -->
        <div class="flex min-h-0 flex-1 flex-col border-r border-gray-200 bg-white">
          <div class="h-16 flex items-center justify-center p-2">
            <!--                        <div class="flex flex-shrink-0 items-center">-->
            <!--                            <application-mark class="h-8"/>FFF-->
            <svg xmlns = "http://www.w3.org/2000/svg" viewBox = "0 0 301 301" >
              <g transform = "translate(0.000000,300.000000) scale(0.100000,-0.100000)" fill = "#e53935" stroke = "none">
                <path d = "M1686 2699 c-10 -58 -24 -244 -19 -251 2 -5 -3 -8 -11 -8 -10 0 -16 9 -16 25 0 34 -19 32 -126 -11 -169 -68 -358 -184 -461 -284 -45 -43 -53 -60 -29 -60 7 0 19 -7 26 -15 19 -23 3 -20 -130 25 -65 22 -124 40 -130 40 -15 0 2 -31 65 -115 29 -39 60 -86 69 -104 17 -32 17 -32 -3 -22 -11 6 -25 19 -30 29 -9 15 -12 15 -36 -8 -37 -35 -137 -245 -174 -365 -39 -129 -59 -237 -67 -371 l-7 -107 36 7 c72 13 35 -10 -94 -59 -72 -27 -133 -53 -135 -57 -4 -6 143 -56 218 -74 15 -3 33 -13 40 -22 11 -13 9 -15 -18 -9 l-30 6 24 -132 c25 -138 70 -288 87 -291 6 0 11 15 13 34 4 50 39 228 69 345 37 149 99 334 155 462 27 63 48 119 46 125 -3 7 -30 19 -60 27 l-57 16 21 48 c13 30 27 47 38 47 60 0 326 -116 365 -160 19 -21 15 -43 -18 -84 l-23 -29 -53 37 c-29 20 -59 36 -66 36 -22 0 -200 -386 -275 -595 -37 -104 -100 -346 -94 -357 3 -5 26 -8 52 -7 64 1 267 43 265 55 -1 5 -5 18 -9 28 -16 42 20 0 80 -93 35 -53 70 -102 79 -109 17 -14 19 -3 32 173 3 44 10 84 16 89 8 9 14 -5 10 -26 -2 -15 32 -7 115 27 220 91 391 202 546 355 60 58 108 113 108 121 0 8 -12 20 -27 26 l-28 11 27 1 c15 1 62 -10 105 -24 116 -36 163 -45 163 -31 0 6 -36 58 -80 116 -44 57 -80 108 -80 112 0 11 18 10 25 -2 3 -5 10 -10 14 -10 12 0 86 181 110 270 27 97 51 278 51 386 0 84 0 85 -22 79 -21 -7 -22 -6 -7 9 9 10 60 37 114 61 55 25 105 51 112 57 10 11 -15 20 -127 47 -99 24 -137 37 -133 47 2 7 12 10 20 7 14 -5 15 1 10 43 -8 73 -65 240 -91 270 -21 26 -23 26 -52 11 -40 -21 -198 -144 -253 -198 l-44 -43 28 -21 c15 -11 40 -30 54 -42 l26 -22 -39 -40 -39 -40 -51 39 c-63 47 -128 79 -228 115 -43 15 -78 29 -78 30 0 2 23 18 51 35 47 31 53 32 88 21 67 -20 89 -14 173 45 44 31 125 80 180 109 107 56 109 65 14 65 -56 0 -218 -18 -225 -26 -2 -2 1 -16 8 -31 24 -53 -20 -2 -95 111 l-73 109 -5 -34z m-99 -537 c103 -44 233 -126 233 -145 0 -19 -36 -64 -61 -78 -16 -8 -34 0 -102 45 -86 57 -172 97 -250 117 -26 6 -47 15 -47 19 0 4 18 24 40 44 51 46 76 46 187 -2z m-193 -187 c75 -30 184 -91 231 -129 l30 -24 -30 -38 c-50 -61 -53 -61 -127 -10 -80 56 -195 112 -265 128 -57 14 -62 21 -37 58 40 60 79 63 198 15z m-202 -194 c77 -26 155 -65 226 -111 48 -31 62 -45 62 -64 0 -27 -44 -86 -64 -86 -7 0 -30 13 -53 30 -59 43 -188 105 -263 125 -36 9 -68 19 -72 22 -5 2 -1 19 8 36 37 73 61 81 156 48z"/>
              </g>
            </svg>
            <!--                        </div>-->
          </div>
          <div class="flex flex-1 flex-col overflow-y-auto items-center pt-5 pb-4">
            <nav
                v-if="sidebarType === 1"
                aria-label="Sidebar"
                class="flex-1">
              <div class="relative flex w-20 flex-col space-y-3 p-3">
                <Link v-for="item in navigation"
                      :key="item.name"
                      :href="route(item.route)"
                      :class="[route().current(item.route) ? 'bg-red-600 text-white' : 'text-gray-400 hover:bg-red-50 hover:text-red-600', 'inline-flex h-14 w-14 flex-shrink-0 items-center justify-center rounded-lg']">
                  <span class="sr-only">{{ item.name }}</span>
                  <component :is="item.icon" class="h-6 w-6" aria-hidden="true" />
                </Link>
              </div>
            </nav>
          </div>
          <div class="flex flex-shrink-0 border-t border-gray-200">
            <nav
                aria-label="Sidebar"
                class="flex-1">
              <div class="relative flex w-20 flex-col items-center space-y-3 p-3">
                <Link v-for="item in secondaryNavigation" :key="item.name" :href="item.href" :class="[item.current ? 'bg-blue-500 text-white' : 'text-gray-400 hover:bg-blue-50 hover:text-blue-600', 'inline-flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-lg']">
                  <span class="sr-only">{{ item.name }}</span>
                  <component :is="item.icon" class="h-6 w-6" aria-hidden="true" />
                </Link>
                <!--                                <a href="#" class="group flex-shrink-0">-->
                <!--                                    <div class="flex items-center">-->
                <!--                                        <div>-->
                <!--                                            <img class="inline-block h-9 w-9 rounded-full" :src="user.imageUrl" alt="" />-->
                <!--                                        </div>-->
                <!--                                    </div>-->
                <!--                                </a>-->
              </div>
            </nav>
            <!--                                <a href="#" class="group block w-full flex-shrink-0">-->
            <!--                                    <div class="flex items-center">-->
            <!--                                        <div>-->
            <!--                                            <img class="inline-block h-9 w-9 rounded-full" :src="user.imageUrl" alt="" />-->
            <!--                                        </div>-->
            <!--                                    </div>-->
            <!--                                </a>-->
          </div>
        </div>
      </div>
    </div>

    <div
        v-if="sidebarType === 2"
        class="hidden lg:flex lg:flex-shrink-0">
      <div class="flex w-64 flex-col">
        <!-- Sidebar component, swap this element with another sidebar if you like -->
        <div class="flex min-h-0 flex-1 flex-col border-r border-gray-200 bg-white">
          <div class="flex flex-1 flex-col overflow-y-auto pt-5 pb-4">
            <div class="flex flex-shrink-0 items-center px-4">
              <application-mark class="h-12"/>
            </div>
            <nav class="mt-5 flex-1" aria-label="Sidebar">
              <div class="space-y-1 px-2">
                <a v-for="item in navigation" :key="item.name" :href="item.href" :class="[item.current ? 'bg-gray-200 text-gray-900' : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900', 'group flex items-center rounded-md px-2 py-2 text-sm font-medium']" :aria-current="item.current ? 'page' : undefined">
                  <component :is="item.icon" :class="[item.current ? 'text-gray-500' : 'text-gray-400 group-hover:text-gray-500', 'mr-3 h-6 w-6 flex-shrink-0']" aria-hidden="true" />
                  {{ item.name }}
                </a>
              </div>
              <hr class="my-5 border-t border-gray-200" aria-hidden="true" />
              <div class="flex-1 space-y-1 px-2">
                <a v-for="item in secondaryNavigation" :key="item.name" :href="item.href" class="group flex items-center rounded-md px-2 py-2 text-sm font-medium text-gray-600 hover:bg-gray-50 hover:text-gray-900">
                  <component :is="item.icon" class="mr-3 h-6 w-6 flex-shrink-0 text-gray-400 group-hover:text-gray-500" aria-hidden="true" />
                  {{ item.name }}
                </a>
              </div>
            </nav>
          </div>
          <div class="flex flex-shrink-0 border-t border-gray-200 p-4">
            <a href="#" class="group block w-full flex-shrink-0">
              <div class="flex items-center">
                <!--                                <div>-->
                <!--                                    <img class="inline-block h-9 w-9 rounded-full" :src="user.imageUrl" alt="" />-->
                <!--                                </div>-->
                <div class="ml-3">
                  <p class="text-sm font-medium text-gray-700 group-hover:text-gray-900">{{ user.name }}</p>
                  <p class="text-xs font-medium text-gray-500 group-hover:text-gray-700">View profile</p>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="flex min-w-0 flex-1 flex-col overflow-hidden">
      <div class="lg:hidden">
        <div class="flex items-center justify-between border-b border-gray-200 bg-gray-50 px-4 py-1.5">
          <div>
            <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=pink&shade=500" alt="Your Company" />
          </div>
          <div>
            <button type="button" class="-mr-3 inline-flex h-12 w-12 items-center justify-center rounded-md text-gray-500 hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-pink-600" @click="sidebarOpen = true">
              <span class="sr-only">Open sidebar</span>
              <Bars3Icon class="h-6 w-6" aria-hidden="true" />
            </button>
          </div>
        </div>
      </div>
      <header v-if="$slots.header" class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8 h-16 flex items-center">
          <div class="hidden lg:flex lg:min-w-0 lg:flex-1 lg:items-center lg:justify-between">
            <div class="min-w-0 flex-1">
              <div class="relative max-w-2xl text-gray-400 focus-within:text-gray-500">
                <slot name="header" />
              </div>
            </div>
            <div class="ml-10 flex flex-shrink-0 items-center space-x-10 pr-4">
              <nav aria-label="Global" class="flex space-x-10">

              </nav>
              <div class="flex items-center space-x-6">
                                <span class="inline-flex">
                                    <a href="#" class="-mx-1 rounded-full bg-white p-1 text-gray-400 hover:text-gray-500">
                                        <span class="sr-only">View notifications</span>
                                        <BellIcon class="h-6 w-6" aria-hidden="true" />
                                    </a>
                                </span>
                <Menu as="div" class="relative inline-block text-left">
                  <MenuButton class="flex rounded p-2 bg-white text-sm focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-2">
                    <!--                                        <span class="sr-only">Open user menu</span>-->
                    <!--                                        <img class="h-8 w-8 rounded-full" :src="user.imageUrl" alt="" />-->

                    <!--                                        <button v-if="$page.props.jetstream.managesProfilePhotos" class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">-->
                    <!--                                            <img class="h-8 w-8 rounded-full object-cover" :src="$page.props.user.profile_photo_url" :alt="$page.props.user.name">-->
                    <!--                                        </button>-->
                    <div class="flex items-center font-medium">
                      {{ $page.props.user.name }}
                      <ChevronDownIcon class="ml-2 -mr-0.5 h-4 w-4" />
                    </div>
                  </MenuButton>

                  <transition enter-active-class="transition ease-out duration-100" enter-from-class="transform opacity-0 scale-95" enter-to-class="transform opacity-100 scale-100" leave-active-class="transition ease-in duration-75" leave-from-class="transform opacity-100 scale-100" leave-to-class="transform opacity-0 scale-95">
                    <MenuItems class="absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none">
                      <div class="py-1">
                        <!-- Account Management -->
                        <!--                                                <div class="block px-4 py-2 text-xs text-gray-400">-->
                        <!--                                                    Manage Account-->
                        <!--                                                </div>-->

                        <DropdownLink :href="route('profile.show')">
                          Profile
                        </DropdownLink>

                        <DropdownLink v-if="$page.props.jetstream.hasApiFeatures" :href="route('api-tokens.index')">
                          API Tokens
                        </DropdownLink>

                        <div class="border-t border-gray-100" />

                        <!-- Authentication -->
                        <form @submit.prevent="logout">
                          <DropdownLink as="button">
                            Log Out
                          </DropdownLink>
                        </form>
                        <!--                                                <MenuItem v-slot="{ active }">-->
                        <!--                                                    <a href="#" :class="[active ? 'bg-gray-100' : '', 'block px-4 py-2 text-sm text-gray-700']">Your Profile</a>-->
                        <!--                                                    -->
                        <!--                                                    -->
                        <!--                                                    -->
                        <!--                                                    -->
                        <!--                                                    -->
                        <!--                                                </MenuItem>-->
                        <!--                                                <MenuItem v-slot="{ active }">-->
                        <!--                                                    <a href="#" :class="[active ? 'bg-gray-100' : '', 'block px-4 py-2 text-sm text-gray-700']">Sign Out</a>-->
                        <!--                                                </MenuItem>-->
                      </div>
                    </MenuItems>
                  </transition>
                </Menu>
              </div>
            </div>
          </div>
        </div>
      </header>

      <div class="flex flex-1 items-stretch overflow-hidden">
        <main class="flex-1 overflow-y-auto">
          <slot />
        </main>
      </div>
    </div>
  </div>
</template>
