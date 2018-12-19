<template>
	<div>
		<h1>Add a Team</h1>
		<form @submit.prevent="addTeam">
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label>Team Name:</label>
						<input type="text" class="form-control" v-model="team.name">
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
		data() {
			return {
				team:{}
			}
		},
		methods: {
			addTeam(){
				let uri = 'api/teams';
				this.axios.post(uri, this.team).then((response) => {
					 this.$router.push({name: 'teams'});
				});
			}
		}
	}
</script>
