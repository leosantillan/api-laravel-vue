<template>
	<div>
		<h1>Teams</h1>
		<div class="row">
			<div class="col-md-10"></div>
			<div class="col-md-2">
			<!--<router-link :to="{ name: 'create_team' }" class="btn btn-primary">Add Team</router-link>-->
			</div>
		</div><br />

		<table class="table table-hover">
			<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Players</th>
				<th>Actions</th>
			</tr>
			</thead>
			<tbody>
				<tr v-for="team in teams" :key="team.id">
					<td>{{ team.id }}</td>
					<td>{{ team.name }}</td>
					<td>
						<div v-for="player in team.players">
						<router-link :to="{name: 'edit_player', params: { id: player.id }}">{{player.first_name + ' ' + player.last_name}}</router-link>
						</div>
					</td>
					<td>
						<router-link :to="{name: 'edit_team', params: { id: team.id }}" class="btn btn-primary">Edit Team</router-link>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</template>

<script>
	export default {
		data() {
			return {
				teams: []
			}
		},
		created() {
			let uri = 'api/teams';
			this.axios.get(uri).then(response => {
			this.teams = response.data;
			});
		},
		methods: {}
	}
</script>
