<template>
	<div>
		<h1>Add a Player</h1>
		<form @submit.prevent="addPlayer">
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label>Player First Name:</label>
						<input type="text" class="form-control" v-model="player.first_name">
					</div>
				</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
						<label>Player Last Name:</label>
						<input type="text" class="form-control" v-model="player.last_name">
					</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
						<label>Team:</label>
						<select class="form-control" v-model="selectedTeam">
							<option v-for="team in teams" :value="team.id">{{ team.name }}</option>
						</select>
					</div>
					</div>
				</div><br />
				<div class="form-group">
					<button class="btn btn-primary">Add</button>
				</div>
		</form>
	</div>
</template>

<script>
		export default {
			data(){
			return {
				player:{},
				teams:{},
				selectedTeam: null
			}
		},
		created() {
			let uri = '/api/teams';
			this.axios.get(uri).then((response) => {
				this.teams = response.data;
			});
		},
		methods: {
			addPlayer(){
				let uri = `/api/teams/${this.selectedTeam}/player`;
				this.axios.post(uri, this.player).then((response) => {
					 this.$router.push({name: 'teams'});
				});
			}
		}
	}
</script>
