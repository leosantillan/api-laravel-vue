<template>
	<div>
		<h1>Edit Team</h1>
		<form @submit.prevent="updateTeam">
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label>Team Name:</label>
						<input type="text" class="form-control" v-model="team.name">
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
				team: {}
			}
		},
		created() {
			let uri = `/api/teams/${this.$route.params.id}`;
			this.axios.get(uri).then((response) => {
				this.team = response.data;
			});
		},
		methods: {
			updateTeam() {
				let uri = `/api/teams/${this.$route.params.id}`;
				this.axios.put(uri, this.team).then((response) => {
					this.$router.push({name: 'teams'});
				});
			}
		}
	}
</script>
