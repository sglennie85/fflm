<script setup>

const props = defineProps({
    team: Object,
});

const moneyFormat = (value) => {
    return Intl.NumberFormat("en-US").format(value);
};

</script>

<template>
    <div class="p-5">
        <div class="text-center text-xl font-semibold mb-4 pt-5">
            {{team.plural_name}}
        </div>
        <div class="pb-3">
            <div><span class="font-bold">Tier: </span>{{team.tier}}</div>
            <div><span class="font-bold">Apothecary: </span><span v-if="team.apothecary">YES</span><span v-else>NO</span></div>
            <div><span class="font-bold">0-{{ team.reroll_limit }} Team Re-Rolls: </span>{{ moneyFormat(team.reroll_cost)}} gp</div>
            <div v-if="team.is_norse" class="font-semibold">Choose one from:</div>
            <div v-if="team.regions.length > 0">
                <span class="font-bold">Regional Special Rules: </span>
                <span v-for="(region, index) in team.regions" :key="index">
                    {{region.name}}{{index !== team.regions.length - 1 ? ', ' : ''}}
                </span>
            </div>
            <div v-if="team.rules.length > 0">
                <span class="font-bold">Team Special Rules: </span>
                <div v-if="team.is_chaos" class="font-semibold">Choose one from:</div>
                <span v-for="(rule, index) in team.rules" :key="index">
                    {{rule.name}}{{index !== team.rules.length - 1 ? ', ' : ''}}
                </span>
            </div>
        </div>

        <div
            v-for="(player, index) in team.players"
            :key="index"
            class="mb-4 p-4 border rounded shadow-sm bg-gray-50"
        >
            <!-- Player Header -->
            <div class="flex justify-between items-center mb-2">
                <div class="flex items-center gap-2">
                    <span class="font-bold text-lg">0–{{ player.limit }}</span>
                    <span class="font-bold text-lg">{{ player.plural_name }}</span>
                </div>
                <div class="text-sm text-gray-600">{{ moneyFormat(player.cost) }}gp</div>
            </div>

            <!-- Stats -->
            <div class="flex flex-wrap gap-6 text-center mb-2">
                <div><div class="font-semibold">MA</div><div>{{ player.ma }}</div></div>
                <div><div class="font-semibold">ST</div><div>{{ player.st }}</div></div>
                <div><div class="font-semibold">AG</div><div>{{ player.ag }}+</div></div>
                <div><div class="font-semibold">PA</div><div>{{ player.pa === 0 ? '-' : player.pa + '+' }}</div></div>
                <div><div class="font-semibold">AV</div><div>{{ player.av }}+</div></div>
            </div>

            <!-- Skills and Traits -->
            <div class="pb-2">
                <div v-if="player.skills.length">
                    <span class="font-semibold">Skills: </span>
                    <span v-for="(skill, index) in player.skills" :key="i">
                        {{ skill.name }}{{ index !== player.skills.length - 1 ? ', ' : '' }}
                    </span>
                </div>
                <div v-if="player.traits.length">
                    <span class="font-semibold">Traits: </span>
                    <span v-for="(trait, index) in player.traits" :key="i">
                        {{ trait.name }}{{ index !== player.traits.length - 1 ? ', ' : '' }}
                    </span>
                </div>
            </div>

            <!-- Categories -->
            <div v-if="player.primaries.length > 0">
                <span class="font-bold">Primary: </span>
                <span v-for="(primary, index) in player.primaries" :key="index">
                    {{ primary.name }}{{ index !== player.primaries.length - 1 ? ', ' : '' }}
                </span>
            </div>
            <div v-if="player.secondaries.length > 0">
                <span class="font-bold">Secondary: </span>
                <span v-for="(secondary, index) in player.secondaries" :key="index">
                    {{ secondary.name }}{{ index !== player.secondaries.length - 1 ? ', ' : '' }}
                </span>
            </div>
        </div>
    </div>
</template>
