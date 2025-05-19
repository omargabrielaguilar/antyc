const { expect } = require('chai');

describe('Counter', function () {
    it('Should start at 0', async function () {
        const Counter = await ethers.getContractFactory('Counter');
        const counter = await Counter.deploy();
        await counter.deployed();

        expect(await counter.count()).to.equal(0);
    });

    it('Should increment the counter', async function () {
        const Counter = await ethers.getContractFactory('Counter');
        const counter = await Counter.deploy();
        await counter.deployed();

        await counter.increment();
        expect(await counter.count()).to.equal(1);
    });

    it('Should decrement the counter', async function () {
        const Counter = await ethers.getContractFactory('Counter');
        const counter = await Counter.deploy();
        await counter.deployed();

        await counter.increment();
        await counter.increment();
        await counter.decrement();
        expect(await counter.count()).to.equal(1);
    });

    it('Should reset the counter', async function () {
        const Counter = await ethers.getContractFactory('Counter');
        const counter = await Counter.deploy();
        await counter.deployed();

        await counter.increment();
        await counter.reset();
        expect(await counter.count()).to.equal(0);
    });
});
