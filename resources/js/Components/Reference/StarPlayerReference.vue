<script setup>
const props = defineProps({
    star: Object,
});

const moneyFormat = (value) => {
    return Intl.NumberFormat("en-US").format(value);
};
</script>

<template>
    <div class="p-5">
        <div class="mb-4 pt-2 flex items-center justify-center relative">
            <div class="text-xl font-semibold text-center flex-grow">
                {{ star.name }}
            </div>
            <div class="text-sm text-gray-600 absolute right-0">
                {{ moneyFormat(star.cost) }} gp
            </div>
        </div>

        <div v-if="!star.pair_key">
            <div class="flex flex-wrap gap-6 text-center mb-3 justify-center">
                <div><div class="font-semibold">MA</div><div>{{ star.ma }}</div></div>
                <div><div class="font-semibold">ST</div><div>{{ star.st }}</div></div>
                <div><div class="font-semibold">AG</div><div>{{ star.ag }}+</div></div>
                <div><div class="font-semibold">PA</div><div>{{ star.pa === 0 ? '-' : star.pa + '+' }}</div></div>
                <div><div class="font-semibold">AV</div><div>{{ star.av }}+</div></div>
            </div>

            <!-- Skills and Traits -->
            <div>
                <div v-if="star.skills.length">
                    <span class="font-semibold">Skills: </span>
                    <span v-for="(skill, index) in star.skills" :key="index">
                        {{ skill.name }}{{ index !== star.skills.length - 1 ? ', ' : '' }}
                    </span>
                </div>
                <div v-if="star.traits.length">
                    <span class="font-semibold">Traits: </span>
                    <span v-for="(trait, index) in star.traits" :key="index">
                        {{ trait.name }}{{ index !== star.traits.length - 1 ? ', ' : '' }}
                    </span>
                </div>
            </div>
        </div>
        <div v-else>
            <div class="mb-4" v-for="player in star.paired_players">
                <div class="flex justify-between items-center mb-2">
                    <div class="flex items-center gap-2">
                        <span class="font-bold text-lg">{{ player.name }}</span>
                    </div>
                </div>
                <div>
                    <div class="flex flex-wrap gap-6 text-center mb-3 justify-center">
                        <div><div class="font-semibold">MA</div><div>{{ player.ma }}</div></div>
                        <div><div class="font-semibold">ST</div><div>{{ player.st }}</div></div>
                        <div><div class="font-semibold">AG</div><div>{{ player.ag }}+</div></div>
                        <div><div class="font-semibold">PA</div><div>{{ player.pa === 0 ? '-' : player.pa + '+' }}</div></div>
                        <div><div class="font-semibold">AV</div><div>{{ player.av }}+</div></div>
                    </div>

                    <!-- Skills and Traits -->
                    <div>
                        <div v-if="player.skills.length">
                            <span class="font-semibold">Skills: </span>
                            <span v-for="(skill, index) in player.skills" :key="index">
                                {{ skill.name }}{{ index !== player.skills.length - 1 ? ', ' : '' }}
                            </span>
                        </div>
                        <div v-if="player.traits.length">
                            <span class="font-semibold">Traits: </span>
                            <span v-for="(trait, index) in player.traits" :key="index">
                                {{ trait.name }}{{ index !== player.traits.length - 1 ? ', ' : '' }}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pt-2">
            <span class="font-semibold">{{ star.special }} - </span>
            <span>{{ star.description }}</span>
        </div>
        <div class="py-2">
            <div>
                <span class="font-semibold">Plays for: </span>
                <span>
                    {{
                        star.combinedRegionsRules.length === 0 ? 'Any team.'
                        : star.combinedRegionsRules.length === 1 ? `Any team with the ${star.combinedRegionsRules[0].name} special rule.`
                            : `Any team with either the ${star.combinedRegionsRules.slice(0, -1).map(r => r.name).join(', ')} or ${star.combinedRegionsRules[star.combinedRegionsRules.length - 1].name} special rules.`
                    }}
                </span>
            </div>
        </div>
    </div>
</template>
