<template>
	<div>
		<h1>Edit Player</h1>
		<form @submit.prevent="updatePlayer">
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
							<select class="form-control" v-model="player.team_id">
								<option v-for="team in teams" :value="team.id">{{ team.name }}</option>
							</select>
						</div>
					</div>
				</div><br />
				<div class="form-group">
					<button class="btn btn-primary">Update</button>
				</div>
		</form>
	</div>
</template>

<script>
		export default {
			data() {
				return {
					player: {},
					teams:{}
				}
			},
			created() {
				let uri = `/api/players/${this.$route.params.id}`;
				this.axios.get(uri).then((response) => {
					this.player = response.data;
				});

				uri = '/api/teams';
				this.axios.get(uri).then((response) => {
					this.teams = response.data;
				});
			},
			methods: {
				updatePlayer() {
					let uri = `/api/teams/${this.player.team_id}/player/${this.$route.params.id}`;
					this.axios.put(uri, this.player).then((response) => {
						this.$router.push({name: 'teams'});
					});
				}
			}
		}
</script>
