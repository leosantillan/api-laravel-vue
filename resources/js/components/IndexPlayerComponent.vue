<template>
	<div>
		<h1>Player</h1>
		<div class="row">
			<div class="col-md-10"></div>
			<div class="col-md-2">
				<router-link :to="{ name: 'create_player' }" class="btn btn-primary">Add Player</router-link>
			</div>
		</div><br />

		<table class="table table-hover">
			<thead>
			<tr>
				<th>ID</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Team</th>
				<th>Actions</th>
			</tr>
			</thead>
			<tbody>
				<tr v-for="player in players" :key="player.id">
					<td>{{ player.id }}</td>
					<td>{{ player.first_name }}</td>
					<td>{{ player.last_name }}</td>
					<td></td>
					<td><router-link :to="{name: 'edit_player', params: { id: player.id }}" class="btn btn-primary">Edit</router-link></td>
				</tr>
			</tbody>
		</table>
	</div>
</template>

<script>
	export default {
		data() {
			return {
				players: []
			}
		},
		created() {
			let uri = 'api/players';
			this.axios.get(uri).then(response => {
				this.players = response.data;
			});
		},
		methods: {}
	}
</script>
